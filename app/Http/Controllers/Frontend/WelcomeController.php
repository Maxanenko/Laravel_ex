<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Table;

class WelcomeController extends Controller
{

    public function tables()
    {
        $tables = Table::all();
        return view('welcome', compact('tables'));
    }

    public function index()
    {
        $specials = Category::where('name', 'specials')->first();
        return view('welcome', compact('specials'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
