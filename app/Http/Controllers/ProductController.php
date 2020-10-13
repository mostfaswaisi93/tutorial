<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $products = [
            ['name' => 'Phone'],
            ['name' => 'Tablet'],
            ['name' => 'Laptops'],
            ['name' => 'Watch'],
            ['name' => 'TVs'],
            ['name' => 'Freeze']
        ];
        Product::insert($products);
        return "Product has been inserted successfully!";
    }

    public function search()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $data = Product::select("name")
            ->where("name", "LIKE", "%{$request->terms}%")
            ->get();
        return response()->json($data);
    }
}
