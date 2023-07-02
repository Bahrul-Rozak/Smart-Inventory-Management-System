<?php

namespace App\Http\Controllers\Pos;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function CustomerAll()
    {

        $customers = Customer::latest()->get();
        return view('backend.customer.customer_all', compact('customers'));
    }
}
