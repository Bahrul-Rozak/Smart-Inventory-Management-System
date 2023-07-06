<?php

namespace App\Http\Controllers\Pos;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function CategoryAll()
    {

        $categoris = Category::latest()->get();
        return view('backend.category.category_all', compact('categoris'));
    }
}
