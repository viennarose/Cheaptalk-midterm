<?php

namespace App\Http\Controllers;

use App\Models\Category;

class SiteController extends Controller
{

    public function landing() {
        $categories = Category::get()->sortBy('category');
        return view('pages.landing', compact('categories'));
    }
}
