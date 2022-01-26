<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regController extends Controller
{
    function index()
    {
        return view('register');
    }
}
