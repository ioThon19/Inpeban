<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function daftar() {
        $data['title'] = 'Daftar';
        return view('user/daftar', $data);
    }

    public function daftar_action(Request $request) {
        $request->validate([
            'email' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
        ]);
        $user = new User([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('succes','Berhasil mendaftar, silahkan login!');
    }

    public function login() {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->withErrors(['password' => 'Cek kembali username atau password!']);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    
}
