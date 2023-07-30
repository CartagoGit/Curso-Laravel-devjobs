<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Password extends \Illuminate\Validation\Rules\Password
{
    function __construct()
    {
        $this->min = 6;
    }
}
