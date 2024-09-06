<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return ('Hello World');
    }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Farel')
        ->with('occupation','Astronaut');
    }
}

class PageController extends Controller
{
    public function index(){
    return 'selamat datang';
    }
    public function about(){
        return 'NIM: 2241760142  Nama: Taufiq Satreiaji';
    }
    public function articles($id){
        return 'Halaman Artikel Dengan ID ' .$id;
    }
}
