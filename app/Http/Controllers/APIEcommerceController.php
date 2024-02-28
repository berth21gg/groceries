<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class APIEcommerceController extends Controller
{
    public function products(){
        //$products = Product::all();

    // ADaptar el formato de la respuesta
    //$formattedData = ['data' => $products->toArray()];

    $products = Product::with("category")->get();
    return response()->json($products);
    }

    public function products_dt(){
        //$products = Product::all();

    // ADaptar el formato de la respuesta
    //$formattedData = ['data' => $products->toArray()];

    $products = Product::with("category")->get();
    return response()->json(["data" => $products]);
    }
}
