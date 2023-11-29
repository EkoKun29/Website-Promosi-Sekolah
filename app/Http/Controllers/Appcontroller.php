<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Photo;
use App\Models\Guru;
use App\Models\Konsentrasi;
use App\Models\Karier;

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
        $guru = Guru::orderBy('id', 'desc')->paginate(10);;
        return view('guru.index', compact('guru'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->search;
        $guru = Guru::where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('bidang', 'like', '%' . $searchTerm . '%')
                ->orWhere('desc', 'like', '%' . $searchTerm . '%');
        })
            ->paginate(10);
            $guru->appends(['search' => $searchTerm]);
    
        return view('guru.index', compact('guru'));
    }

    //------------------Konsentrasi------------------------
    public function konsentrasi(){
        $konsentrasi = Konsentrasi::orderBy('id', 'desc')->get();
        return view('konsentrasi.index', compact('konsentrasi'));
    }

    //-----------------Karier----------------------
    public function karier(){
        $karier = Karier::orderBy('id', 'desc')->get();
        return view('karier.index', compact('karier'));
    }

    public function detailkarier($slug){
        $karier = Karier::where('slug', $slug)->first();

        return view('karier.detail', compact('karier'));
    }

}
