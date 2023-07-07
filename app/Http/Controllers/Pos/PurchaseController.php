<?php

namespace App\Http\Controllers\Pos;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function PurchaseAll()
    {

        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc');
        return view('backend.purchase.purchase_all', compact('allData'));
    }
}
