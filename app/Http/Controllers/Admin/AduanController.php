<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::orderBy('tgl_aduan', 'desc')->get();
        return view('Admin.Aduan.index', ['aduan' => $aduan]);
    }

    public function show($id_aduan)
    {
        $aduan = Aduan::where('id_aduan', $id_aduan)->first();

        $tanggapan = Tanggapan::where('id_aduan', $id_aduan)->first();

        return view('Admin.Aduan.show', ['aduan'=>$aduan, 'tanggapan'=>$tanggapan]);
    }
}
