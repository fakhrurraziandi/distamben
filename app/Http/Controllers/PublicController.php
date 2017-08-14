<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PublicController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('home')->with('categories', $categories);
    }
}
