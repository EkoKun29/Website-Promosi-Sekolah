<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Photo;
use App\Models\Guru;
use App\Models\Konsentrasi;

class Appcontroller extends Controller
{
    public function index(){
        $berita = Berita::orderBy('id', 'desc')->get();
        return view('berita.index', compact('berita'));
    }

    public function detail($slug){
        $berita = Berita::where('slug', $slug)->first();

        return view('berita.detail', compact('berita'));
    }

    //------------------Galeri------------------------
    public function galeri(){
        $photo = Photo::orderBy('id', 'desc')->get();
        return view('galeri.index', compact('photo'));
    }

    //------------------Guru------------------------
    public function guru(){
        $guru = Guru::orderBy('id', 'desc')->get();
        return view('guru.index', compact('guru'));
    }

    //------------------Konsentrasi------------------------
    public function konsentrasi(){
        $konsentrasi = Konsentrasi::orderBy('id', 'desc')->get();
        return view('konsentrasi.index', compact('konsentrasi'));
    }
}
