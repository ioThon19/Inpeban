<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing');
    }

    public function login(Request $request)
    {
        $username = Masyarakat::where('username', $request->username)->first();

        if (!$username) {
            return redirect()->back()->with(['pesan' => 'Username tidak terdaftar']);
        }

        $password = Hash::check($request->password, $username->password);

        if (!$password) {
            return redirect()->back()->with(['pesan' => 'Password tidak sesuai']);
        }

        if (Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->back();
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

    public function formRegister()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
            'id_masyarakat' => ['required'],
            'nama' => ['required'],
            'username' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with(['pesan' => $validate->errors()]);
        }

        $username = Masyarakat::where('username', $request->username)->first();

        if ($username) {
            return redirect()->back()->with(['pesan' => 'Username sudah terdaftar']);
        }

        Masyarakat::create([
            'id_masyarakat' => $data['id_masyarakat'],
            'nama' => $data['nama'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('inpeban.index');
    }

    public function logout()
    {
        Auth::guard('masyarakat')->logout();

        return redirect()->back();
    }

    public function storeAduan(Request $request)
    {
        if (!Auth::guard('masyarakat')->user()) {
            return redirect()->back()->with(['pesan' => 'Login dibutuhkan!'])->withInput();
        }

        $data = $request->all();

        $validate = Validator::make($data, [
            'isi_laporan' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('assets/aduan', 'public');
        }

        date_default_timezone_set('Asia/Bangkok');

        $aduan = Aduan::create([
            'tgl_aduan' => date('Y-m-d h:i:s'),
            'id_masyarakat' => Auth::guard('masyarakat')->user()->id_masyarakat,
            'isi_laporan' => $data['isi_laporan'],
            'foto' => $data['foto'] ?? '',
            'status' => '0',
        ]);

        if ($aduan) {
            return redirect()->route('inpeban.laporan', 'me')->with(['aduan' => 'Berhasil terkirim!', 'type' => 'success']);
        } else {
            return redirect()->back()->with(['aduan' => 'Gagal terkirim!', 'type' => 'danger']);
        }
    }

    public function laporan($siapa = '')
    {
        $terverifikasi = Aduan::where([['id_masyarakat', Auth::guard('masyarakat')->user()->id_masyarakat], ['status', '!=', '0']])->get()->count();
        $proses = Aduan::where([['id_masyarakat', Auth::guard('masyarakat')->user()->id_masyarakat], ['status', 'proses']])->get()->count();
        $selesai = Aduan::where([['id_masyarakat', Auth::guard('masyarakat')->user()->id_masyarakat], ['status', 'selesai']])->get()->count();

        $hitung = [$terverifikasi, $proses, $selesai];

        if ($siapa == 'me') {
            $aduan = Aduan::where('id_masyarakat', Auth::guard('masyarakat')->user()->id_masyarakat)->orderBy('tgl_aduan', 'desc')->get();

            return view('user.laporan', ['aduan' => $aduan, 'hitung' => $hitung, 'siapa' => $siapa]);
        } else {
            $aduan = Aduan::where([['id_masyarakat', '!=', Auth::guard('masyarakat')->user()->id_masyarakat], ['status', '!=', '0']])->orderBy('tgl_aduan', 'desc')->get();

            return view('user.laporan', ['aduan' => $aduan, 'hitung' => $hitung, 'siapa' => $siapa]);
        }
    }
}
