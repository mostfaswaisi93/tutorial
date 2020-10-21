<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customer = Customer::all();
        return $customer;
    }
}
