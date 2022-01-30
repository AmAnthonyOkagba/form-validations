<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search= $request->input('search');

        $users = profile::where('created_at','like','%'.$search .'%')->get();
        return view('search', compact('users'));
    }
}
