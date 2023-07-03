<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Progress;

class AwalController extends Controller
{
    public function data(){
        $data['title'] = 'Login';
        $anak = Anak::all();
        return view('awal.data', array_merge($data, ['type_menu' => 'data', 'anak' => $anak]));
    }
    public function cari(Request $request)
    {
        $data['title'] = 'Login';
        $cari = $request->cari;
        $anak = Anak::where('nama', 'like', '%'.$cari.'%')->paginate(5);
        return view('awal.data', array_merge($data, ['type_menu' => 'data', 'anak' => $anak]));
    }   
    public function show($id_anak)
    {
        //menampilkan detail data dengan menemukan berdasarkan id kota untuk diedit
        $data['title'] = 'Login';
        $anak = (new \App\Models\Progress)->getinfo($id_anak); 
        return view('awal.show', array_merge($data, ['type_menu' => 'data', 'anak' => $anak]));
    }
}
