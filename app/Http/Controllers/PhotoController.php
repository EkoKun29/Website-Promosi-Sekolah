<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index(){
        $photo = Photo::orderBy('id', 'desc')->get();
        return view('admin.photo.index', compact('photo'));
    }

    public function store(Request $request){
        $rules = [
            // 'judul' => 'required',
            'image' => 'sometimes|required|max:5000|mimes:jpg,jpeg,png,webp',
            'kategori' => 'required',
        ];
    
        $messages = [
            // 'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'kategori.required' => 'Kategori wajib diisi',
        ];
    
        $this->validate($request, $rules, $messages);
    
            // $fileName = time() . '.' . $request->image->extension();
            // $request->file('image')->storeAs('public/photo', $fileName);
             $fileName = $request->file('image')->storePublicly('photo');
        
            Photo::create([
                // 'judul' => $request->judul,
                'image' => $fileName,
                'kategori' => $request->kategori,
            ]);

            return redirect(route('photo'))->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id){
        $photo = Photo::find($id);

                # Jika ada image baru
                if ($request->hasFile('image')) {
                    $fileCheck = 'required|max:5000|mimes:jpg,jpeg,png';
                } else {
                    $fileCheck = '';
                }
        
                $rules = [
                    // 'judul' => 'required',
                    'image' => $fileCheck,
                    'kategori' => 'required',
                ];
        
                $messages = [
                    // 'judul.required' => 'Judul wajib diisi!',
                    'image.required' => 'Judul wajib diisi!',
                    'kategori.required' => 'Kategori wajib diisi',
                ];
        
                $this->validate($request, $rules, $messages);
        
                // Cek jika ada image baru
                if ($request->hasFile('image')) {
                    if (\File::exists('storage/photo/' . $photo->image)) {
                        \File::delete('storage/photo/' . $request->old_image);
                    }
                    $fileName = $request->file('image')->storePublicly('photo');
                }
        
                if ($request->hasFile('image')) {
                    $checkFileName = $fileName;
                } else {
                    $checkFileName = $request->old_image;
                }

                $photo->update([
                    // 'judul' => $request->judul,
                    'image' => $checkFileName,
                    'kategori' => $request->kategori,
                ]);
        
                return redirect(route('photo'))->with('success', 'data berhasil di update');
    }

    public function destroy($id){
        $photo = Photo::find($id);
        if (\File::exists('storage/photo/' . $photo->image)) {
            \File::delete('storage/photo/' . $photo->image);
        }

        $photo->delete();

        return redirect(route('photo'))->with('success', 'data berhasil di hapus');
    }

public function category($kategori = null) {
    if ($kategori === null || $kategori === 'all') {
        $photo = Photo::all();
    } else {
        $photo = Photo::where('kategori', $kategori)->get();
    }

    return view('galeri.index', compact('photo'));
}

}
