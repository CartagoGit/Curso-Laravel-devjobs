<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vacants', function (Blueprint $table) {
            //
            $table->string('title');
            $table->foreignId('salary_id')->constrained('salaries')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('company');
            $table->date('last_day_of_vacant');
            $table->text('description');
            $table->string('image');
            $table->integer('published')->default(1);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacants', function (Blueprint $table) {

            $table->dropColumn(['title', 'salary_id', 'category_id', 'company', 'last_day_of_vacant', 'description', 'image', 'published', 'user_id']);
        });
    }
};
