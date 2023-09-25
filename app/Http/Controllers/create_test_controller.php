<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class create_test_controller extends Controller
{
    public function index()
    {
        $values = Test::all();
        return view("tests.test", compact("values"));
    }
}
