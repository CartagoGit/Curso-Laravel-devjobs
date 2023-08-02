<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowError extends Component
{

    public $message;

    public function render()
    {
        return view('livewire.show-error');
    }
}
