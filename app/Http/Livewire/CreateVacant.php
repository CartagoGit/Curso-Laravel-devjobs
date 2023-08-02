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
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required|string',
        'last_day_of_vacant' => 'required|date',
        'description' => 'required|string',
        'image' => 'required|image|max:1024',
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

    public function createVacant(){
        $data = $this->validate();
        $data['image'] = $this->image->store('images/vacants', 'public');
    }
}
