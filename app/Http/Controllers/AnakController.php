<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnakController extends Controller
{
    public function index(){

        $data['title'] = 'Login';
        $anak = Anak::paginate(5);
        return view('admin.anak', array_merge($data, ['type_menu' => 'anak', 'anak' => $anak]));
    }
    public function create()
    {
        $anak = Anak::all();
        return view('admin.create_anak', array_merge(['type_menu' => 'layout', 'anak' => $anak]));
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        // $request->validate([
        //     'id_anak' => 'required',
        //     'nama' => 'required',
        //     'TTL' => 'required',
        //     'nama_ibu' => 'required',
        //     'nama_ayah' => 'required',
        //     'alamat' => 'required',
        //     'telepon' => 'required',
        //     ]);
            //fungsi eloquent untuk menambah data

            if($request->file('akte')){
                $akte = $request->file('akte')->store('storage','public');
            }
            Anak::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return to_route('anak.index')->with('success', 'Anak Berhasil Ditambahkan');
    }
    
    public function edit($id_anak)
    {
        //menampilkan detail data dengan menemukan berdasarkan id kota untuk diedit
        $anak = Anak::find($id_anak);
        return view('admin.edit_anak', array_merge(['type_menu' => 'layout', 'anak' => $anak]));
    }
    public function update(Request $request, $id_anak)
    {
         //melakukan validasi data
         $request->validate([
            'id_anak' => 'required',
            'nama' => 'required',
            'TTL' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            Anak::find($id_anak)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('anak.index')->with('success', 'Anak Berhasil Diupdate');
    }
    public function destroy($id_anak)
     {
         //fungsi eloquent untuk menghapus data
         Anak::find($id_anak)->delete();
         return redirect()->route('anak.index')-> with('success', 'Anak Berhasil Dihapus');
     }
     
}
