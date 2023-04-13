<?php

namespace App\Http\Controllers;

use App\Models\gerai;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeraiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $gerai = gerai::where('nama', 'like', '%'.$cari.'%')->paginate(5);
        return view('gerai.index', compact('gerai'));
    }
    public function index()
    {
        $data['title'] = 'Login';
//        $gerais = Gerai::paginate(5);
//        return view('user.vGerai',$data,['type_menu'=>'gerai'],compact('gerais'));

//        $gerais = Gerai::paginate(5);
//        $gerais = DB::table('gerai')
//            ->join('master_account', 'gerai.id_user', '=', 'master_account.id')
//            ->join('kota', 'gerai.id_kota', '=', 'kota.id_kota')
//            ->select('gerai.id_Gerai', 'master_account.nama', 'kota.nama_kota', 'gerai.alamat')
//            ->paginate(5);
        $gerais = (new \App\Models\gerai)->getFullInfo();
        return view('user.vGerai', array_merge($data, ['type_menu' => 'gerai', 'gerais' => $gerais]));

//        return view('user.vgerai', compact('gerais'));
//        $gerais = Gerai::paginate(5);
//        return view('user.vGerai',$data);

    }

//    public function showData(){
//        return DB::table('master_account')
//            ->get();
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
//        $kota = (new \App\Models\gerai)->getFullInfo();
        return view('admin.create_gerai', array_merge(['type_menu' => 'layout', 'kota' => $kota]));
//        return view('admin.create_gerai', ['type_menu' => 'layout']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
//        $request->validate([
//            'id_user' => 'required',
//            'id_kota' => 'required',
//            'nama_gerai' => 'required',
//            'alamat' => 'required',
//        ]);
        //fungsi eloquent untuk menambah data
        gerai::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return to_route('gerai.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_gerai)
    {
        $gerais= Gerai::find($id_gerai);
        return view('mahasiswas.detail', compact('gerais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_gerai)
    {
        //fungsi eloquent untuk menghapus data
        gerai::find($id_gerai)->delete();
        return redirect()->route('gerai.index')-> with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
