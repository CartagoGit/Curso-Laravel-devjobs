<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class CreateVacant extends Component
{

    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day_of_vacant;
    public $description;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required|string',
        'last_day_of_vacant' => 'required|date',
        'description' => 'required|string',
    ];
    public function render()
    {
        // Consultar base de datos
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.create-vacant', [
            'salaries' => $salaries, 'categories' => $categories
        ]);
    }
}
