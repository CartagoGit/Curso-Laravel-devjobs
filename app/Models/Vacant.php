<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'title',
        'salary_id',
        'category_id',
        'company',
        'last_day_of_vacant',
        'description',
        'image',
        'published',
        'user_id'

    ];
}
