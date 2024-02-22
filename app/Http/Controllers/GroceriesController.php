<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
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
        // Obtener todo los comentarios
        $comments = Comment::where('product_id', $id_product)->get();
        //Contar los comentario
        $commentsCount = $comments->count();

        //verifica si el producto existe
        if(!$product){
            abort(404);
        }

        return view("groceries.detail_product", compact('products', 'product', 'comments', 'commentsCount'));
    }

    /*public function contact(){
        return view("groceries.contact");
    }
    */
}
