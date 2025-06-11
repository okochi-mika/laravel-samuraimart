<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MajorCategory;
use App\Models\Product;

class WebController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        $major_categories = MajorCategory::all();

        $recently_products = Product::orderBy('created_at', 'desc')->take(4)->get();

        return view('web.index', compact('major_categories', 'categories', 'recently_products'));

    }
}

        
        
