<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Progress;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function show($id_anak)
    {
        //menampilkan detail data dengan menemukan berdasarkan id kota untuk diedit
        $data['title'] = 'Login';
        $progress = (new \App\Models\Progress)->getinfo($id_anak); 
        return view('admin.showprogres', array_merge($data, ['type_menu' => 'layout', 'progress' => $progress]));
    }
    public function edit($id_progress)
    {
        //menampilkan detail data dengan menemukan berdasarkan id kota untuk diedit
        $progress = (new \App\Models\Progress)->getFullInfo()->find($id_progress);
        return view('admin.editshow', array_merge(['type_menu' => 'layout', 'progress' => $progress]));
    }
    public function update(Request $request, $id_progress)
    {
         //melakukan validasi data
         $request->validate([
            'id_progress' => 'required',
            'id_anak' => 'required',
            'bulan_ke' => 'required',
            'panjang_bayi' => 'required',
            'berat_bayi' => 'required',
        ]);
        
        
        //fungsi eloquent untuk mengupdate data inputan kita
        Progress::find($id_progress)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            // 'id_anak' => $request->$id_anak
            $id_anak = $request -> id_anak;
            return redirect()->route('show.show',$id_anak)->with('success', 'Progress Berhasil Diupdate');
    }
    public function destroy($id_progress)
     {
         //fungsi eloquent untuk menghapus data
         Progress::find($id_progress)->delete();
         return Redirect::back()->with('success', 'Progress Berhasil dihapus');
     }
     public function create()
    {
        $progress = Anak::all();
        return view('admin.create_progress', array_merge(['type_menu' => 'layout', 'progress' => $progress]));
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
            Progress::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama progres
            $id_anak = $request -> id_anak;
            return to_route('show.show',$id_anak)->with('success', 'Progress Berhasil Diupdate');
    }
}
