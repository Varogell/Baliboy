<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function __construct()
   {
      $this->middleware('must-manager')->only('create','store');
   }
    public function index(){

        $data['title'] = 'Login';
        $admin = (new \App\Models\User)->getFullInfo();
        return view('admin.admin', array_merge($data, ['type_menu' => 'admin', 'admin' => $admin]));
    }
    public function create()
    {
        $admin = User::all();
        return view('admin.create_user', array_merge(['type_menu' => 'layout', 'admin' => $admin]));
    }
    
    public function store(Request $request){
        $request->validate([
            'id_status' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'noHp' => 'required',
            'alamat' => 'required',
            'username' => 'required|unique:master_account',
            'password' => 'required',
        ]);
        $user = new User([
            'id_status' => $request->id_status,
            'nama' => $request->nama,
            'jenisKelamin' => $request->jenisKelamin,
            'noHp' => $request->noHp,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('admin.index')->with('Success','Registration Success, Please login!');
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id kota untuk diedit
        $admin = User::find($id);
        $status = (new \App\Models\User)->getFullInfo();
        return view('admin.edit_user', array_merge(['type_menu' => 'layout', 'admin' => $admin, 'status'=> $status]));
    }
    public function update(Request $request, $id)
    {
         //melakukan validasi data
         $request->validate([
            'id_status' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'noHp' => 'required',
            'alamat' => 'required',
            'username' => 'required|unique:master_account',
            'password' => 'required',
            ]);

        //fungsi eloquent untuk mengupdate data inputan kita
            User::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('admin.index')->with('success', 'User Berhasil Diupdate');
    }
    public function destroy($id)
     {
         //fungsi eloquent untuk menghapus data
         User::find($id)->delete();
         return redirect()->route('admin.index')-> with('success', 'User Berhasil Dihapus');
     }
    public function login(){
        $data['title'] = 'Login';
        return view('admin/login',$data);
    }

    public function login_action(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['username'=>$request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors('password', 'wrong username or password!');
    }

    public function logout(Request $request) {
        Auth::logout();
            $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login');
    }


}
