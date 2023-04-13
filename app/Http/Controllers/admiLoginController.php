<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admiLoginController extends Controller
{
    public function index(){
        return view('admin.login',['type_menu' => 'layout']);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ]);

        if (account::attempt($credentials)) {
            echo'berhasil';
        }else {
            echo'gagal';
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
