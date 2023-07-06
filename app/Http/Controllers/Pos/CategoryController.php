<?php

namespace App\Http\Controllers\Pos;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryAll()
    {

        $categoris = Category::latest()->get();
        return view('backend.category.category_all', compact('categoris'));
    }

    public function CategoryAdd()
    {
        return view('backend.category.category_add');
    }


    public function CategoryStore(Request $request)
    {

        Category::insert([
            'name' => $request->name,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('category.all')->with($notification);
    }
}
