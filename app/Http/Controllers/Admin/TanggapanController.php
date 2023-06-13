<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tanggapan;
use App\Models\Aduan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $aduan = Aduan::where('id_aduan', $request->id_aduan)->first();

        $tanggapan = Tanggapan::where('id_aduan', $request->id_aduan)->first();

        if ($tanggapan) {
            $aduan->update(['status' => $request->status]);

            $tanggapan->update([
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);

            return redirect()->route('aduan.show', ['aduan'=> $aduan, 'tanggapan'=> $tanggapan])->with(['status' => 'Berhasil Dikirim']);
        } else {
            $aduan->update(['status' => $request->status]);

            $tanggapan = Tanggapan::create([
                'id_aduan' => $request->id_aduan,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
            ]);

            return redirect()->route('aduan.show', ['aduan'=> $aduan, 'tangapan' => $tanggapan])->with(['status' => 'Berhasil Dikirim']);
        }
    }
}
