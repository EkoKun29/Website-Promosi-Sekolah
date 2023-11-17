<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsentrasi;

class KonsentrasiController extends Controller
{
    public function index(){
        $konsentrasi = Konsentrasi::orderBy('id', 'desc')->get();
        return view('admin.konsentrasi.index', compact('konsentrasi'));
    }

    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'jurusan' => 'required',
            'image' => 'sometimes|required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'nullable|min:20',
        ];
    
        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'jurusan.required'=> 'Jurusan dajib diisi',
            'image.required' => 'Image wajib diisi!',
            'desc.min' => 'Deskripsi wajib diisi!',
        ];
    
        $this->validate($request, $rules, $messages);
    
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/konsentrasi', $fileName);
        
            Konsentrasi::create([
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'image' => $fileName,
                'desc' => $request->desc,
            ]);

            return redirect(route('konsentrasi'))->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id){
        $konsentrasi = Konsentrasi::find($id);

                # Jika ada image baru
                if ($request->hasFile('image')) {
                    $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
                } else {
                    $fileCheck = '';
                }
        
                $rules = [
                    'nama' => 'required',
                    'jurusan' => 'required',
                    'image' => $fileCheck,
                    'desc' => 'required',
                ];
        
                $messages = [
                    'nama.required' => 'Nama wajib diisi!',
                    'jurusan.required' => 'Bidang wajib diisi!',
                    'image.required' => 'Image wajib diisi!',
                    'desc.required' => 'Deskripsi wajib diisi!',
                ];
        
                $this->validate($request, $rules, $messages);
        
                // Cek jika ada image baru
                if ($request->hasFile('image')) {
                    if (\File::exists('storage/konsentrasi/' . $konsentrasi->image)) {
                        \File::delete('storage/konsentrasi/' . $konsentrasi->old_image);
                    }
                    $fileName = time() . '.' . $request->image->extension();
                    $request->file('image')->storeAs('public/konsentrasi', $fileName);
                }
        
                if ($request->hasFile('image')) {
                    $checkFileName = $fileName;
                } else {
                    $checkFileName = $request->old_image;
                }

                $konsentrasi->update([
                    'nama' => $request->nama,
                    'jurusan' => $request->jurusan,
                    'image' => $checkFileName,
                    'desc' => $request->desc,
                ]);
        
                return redirect(route('konsentrasi'))->with('success', 'data berhasil di update');
    }

    public function destroy($id){
        $konsentrasi = Konsentrasi::find($id);
        if (\File::exists('storage/konsentrasi/' . $konsentrasi->image)) {
            \File::delete('storage/konsentrasi/' . $konsentrasi->image);
        }

        $konsentrasi->delete();

        return redirect(route('konsentrasi'))->with('success', 'data berhasil di hapus');
    }
}
