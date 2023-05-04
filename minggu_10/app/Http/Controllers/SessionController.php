<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        $request->session()->put('nama', 'Zainal');
        echo "Data telah ditambahkan ke session";
    }
    //menampilkan isi session
    public function show(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'tidak ada data dalam session';
        }
    }
    //menghapus session
    public function delete(Request $request)
    {
        $request->session()->forget('nama');
        echo 'Data dihapus dari session';
    }
}