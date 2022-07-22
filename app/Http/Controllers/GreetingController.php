<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet()
    {
        $age = 11;
        if ($age > 18) {
            echo "Hello Man";
        }else {
            echo "Hello Boy";
        }
    }
}
