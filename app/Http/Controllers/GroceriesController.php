<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index(){
        /*$products = Product::all();
        dd($products);
        */

        return view("groceries.index");
    }

    public function shop(){
        $products = Product::all();
        $categories = Category::all();
        return view("groceries.shop", compact('products', 'categories'));
    }

    public function register(){
        return view("groceries.register");
    }

    public function login(){
        return view("groceries.login");
    }

    public function detail_product($id_product){
        // Obtener todos los productos
        $products = Product::all();
        // Obtener el producto especifico
        $product = Product::find($id_product);

        //verifica si el producto existe
        if(!$product){
            abort(404);
        }

        return view("groceries.detail_product", compact('products', 'product'));
    }

    /*public function contact(){
        return view("groceries.contact");
    }
    */
}
