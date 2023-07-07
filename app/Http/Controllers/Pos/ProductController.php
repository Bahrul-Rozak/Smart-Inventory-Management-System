<?php

namespace App\Http\Controllers\Pos;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function ProductAll()
    {

        $product = Product::latest()->get();
        return view('backend.product.product_all', compact('product'));
    }
}
