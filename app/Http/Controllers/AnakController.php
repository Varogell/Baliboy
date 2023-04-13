<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index(){
        return view('admin.anak',['type_menu' => 'layout']);
    }
    public function create()
    {
        return view('admin.create_anak');
    }
    public function store(Request $request)
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
            //fungsi eloquent untuk menambah data
            Anak::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('admin.create_anak')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
}
