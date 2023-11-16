<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class Appcontroller extends Controller
{
    public function index(){
        $berita = Berita::orderBy('id', 'desc')->get();
        return view('berita.index');
    }
}
