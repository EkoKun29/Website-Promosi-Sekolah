<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index(){
        $berita = Berita::orderBy('id', 'desc')->take(3)->get();
        return view('welcome', compact('berita'));
    }
        
    public function detail($slug){
        $berita = Berita::where('slug', $slug)->first();

        return view('berita.detail', compact('berita'));
    }
}
