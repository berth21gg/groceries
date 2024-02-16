<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){

        $welcome_message = "Welcome to my site...";
        $var2 = "value 2";
        $var3 = "value 3";
        return view('index', ["welcome_msg" => $welcome_message, "var2" => $var2, "var3" => $var3]);
    }

    public function services(){
        return view('services');
    }

    public function products(){
        return view('products');
    }

    public function contact(){
        return view('contact');
    }
}
