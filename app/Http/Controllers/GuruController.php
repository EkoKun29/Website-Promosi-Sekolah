<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::orderBy('id', 'desc')->get();
        return view('admin.guru.index', compact('guru'));
    }

    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'bidang' => 'required',
            'image' => 'sometimes|required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'nullable|min:20',
        ];
    
        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'bidang.required'=> 'Bidang dajib diisi',
            'image.required' => 'Image wajib diisi!',
            'desc.min' => 'Deskripsi wajib diisi!',
        ];
    
        $this->validate($request, $rules, $messages);
    
            //$fileName = time() . '.' . $request->image->extension();
            $fileName = $request->file('image')->storePublicly('guru');
        
            Guru::create([
                'name' => $request->nama,
                'bidang' => $request->bidang,
                'image' => $fileName,
                'desc' => $request->desc,
            ]);

            return redirect(route('guru'))->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id){
        $guru = Guru::find($id);

                # Jika ada image baru
                if ($request->hasFile('image')) {
                    $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
                } else {
                    $fileCheck = '';
                }
        
                $rules = [
                    'nama' => 'required',
                    'bidang' => 'required',
                    'image' => $fileCheck,
                    'desc' => 'required',
                ];
        
                $messages = [
                    'nama.required' => 'Nama wajib diisi!',
                    'bidang.required' => 'Bidang wajib diisi!',
                    'image.required' => 'Image wajib diisi!',
                    'desc.required' => 'Deskripsi wajib diisi!',
                ];
        
                $this->validate($request, $rules, $messages);
        
                // Cek jika ada image baru
                if ($request->hasFile('image')) {
                    if (\File::exists('storage/guru/' . $guru->image)) {
                        \File::delete('storage/guru/' . $request->old_image);
                    }
                    $fileName = time() . '.' . $request->image->extension();
                    $request->file('image')->storeAs('public/guru', $fileName);
                }
        
                if ($request->hasFile('image')) {
                    $checkFileName = $fileName;
                } else {
                    $checkFileName = $request->old_image;
                }

                $guru->update([
                    'name' => $request->nama,
                    'bidang' => $request->bidang,
                    'image' => $checkFileName,
                    'desc' => $request->desc,
                ]);
        
                return redirect(route('guru'))->with('success', 'data berhasil di update');
    }

    public function destroy($id){
        $guru = Guru::find($id);
        if (\File::exists('storage/guru/' . $guru->image)) {
            \File::delete('storage/guru/' . $guru->image);
        }

        $guru->delete();

        return redirect(route('guru'))->with('success', 'data berhasil di hapus');
    }

//     public function search(Request $request)
// {
//     $search = $request->input('search');

//     $guru = Guru::where('name', 'like', '%' . $search . '%')
//                 ->orWhere('bidang', 'like', '%' . $search . '%')
//                 ->orWhere('desc', 'like', '%' . $search . '%')
//                 ->orderBy('id', 'desc')
//                 ->get();

//     return view('guru.index', compact('guru'));
// }

}
