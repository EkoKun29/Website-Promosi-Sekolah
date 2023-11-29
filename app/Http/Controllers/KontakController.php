<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(){
        // $berita = Berita::orderBy('id', 'desc')->get();
        return view('contac.index');
    }
}
