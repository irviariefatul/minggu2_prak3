<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang Di Halaman Awal Website';
    }
    
    public function about(){
        return 'Website oleh Irvi Ariefatul Julia Putri';
    }
}
