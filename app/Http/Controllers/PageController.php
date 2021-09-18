<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function about(){
       return view('about-us');
    }

    public function news($id){
        return view('news', ['id' => $id]);
    }
}
