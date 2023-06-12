<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'Specials')->first();

        return view('welcome', compact('specials'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
