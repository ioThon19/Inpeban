<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('Admin.Masyarakat.index');
    }

    public function show($id_masyarakat)
    {
        return view('Admin.Masyarakat.show');
    }
}
