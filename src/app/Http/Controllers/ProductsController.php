<?php

namespace App\Http\Controllers;

use Route;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function search()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }
}
