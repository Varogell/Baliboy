<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'Register';
        return view('user/register2',$data);
    }

    public function register_action(Request $request){
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
        return redirect()->route('login')->with('Success','Registration Success, Please login!');
    }

    public function login(){
        $data['title'] = 'Login';
        return view('user/login',$data);
    }

    // public function login_action(Request $request){
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //    if(Auth::attempt(['username'=>$request->username, 'password' => $request->password])){
    //        $request->session()->regenerate();
    //        return redirect()->intended('/logiswift');
    //    }
    //     return back()->withErrors('password', 'wrong username or password!');
    // }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/index');
    }

    public function login_action(Request $request, User $user)
    {
        if(Auth::attempt(['username'=>$request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/index');
        }

        $user = $user -> find(Auth::user()->id);

        return fractal()
            ->item($user)
            ->transforWith(new UserTransformer)
            ->toArray();
    }
}
