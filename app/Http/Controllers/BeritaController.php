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
    
        // $fileName = null;
    
        // if ($request->hasFile('image')) {
        //     $fileName = time() . '.' . $request->image->extension();
        //     $request->file('image')->storeAs('public/artikel', $fileName);
        // }
        
        $fileName = $request->file('image')->storePublicly('artikel');
         
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

    public function update(Request $request, $id){
        $berita = Berita::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/' . $berita->image)) {
                \File::delete('storage/artikel/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $berita->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('berita'))->with('success', 'data berhasil di update');
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
