<?php

namespace App\Http\Controllers\Pos;

use App\Models\Unit;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function PurchaseAll()
    {

        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc');
        return view('backend.purchase.purchase_all', compact('allData'));
    }

    public function PurchaseAdd()
    {

        $supplier = Supplier::all();
        $unit = Unit::all();
        $category = Category::all();
        return view('backend.purchase.purchase_add', compact('supplier', 'unit', 'category'));
    }
}
