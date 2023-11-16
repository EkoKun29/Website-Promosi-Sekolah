<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index(){
        return view('admin.berita.index',[
            'berita' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function create(){
        return view('admin.berita.create');
    }

    public function store(Request $request) {
        $rules = [
            'judul' => 'required',
            'image' => 'sometimes|required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'nullable|min:20',
        ];
    
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.min' => 'Deskripsi wajib diisi!.',
        ];
    
        $this->validate($request, $rules, $messages);
    
        $fileName = null;
    
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }
    
        $content = $request->input('desc') ?: '';
    
        // Manipulasi gambar jika diperlukan
        // Pastikan GD Library telah diinstal dan aktif
    
        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $content,
        ]);
    
        return redirect(route('berita'))->with('success', 'Data berhasil disimpan');
    }
    

    public function edit($id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('admin.berita.edit',compact('berita'));
    }

    public function update(Request $request){

    }

    public function destroy($id){
        $berita = Berita::find($id);
        if (\File::exists('storage/artikel/' . $berita->image)) {
            \File::delete('storage/artikel/' . $berita->image);
        }
        $berita->delete();
    
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    
    
}
