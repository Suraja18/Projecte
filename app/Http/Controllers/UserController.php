<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function userview($name)
    {
        return view('welcome', ['name' => $name]);
    }
}
