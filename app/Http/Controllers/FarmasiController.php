<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function obatIndex()
    {
    	return view('pages.obat');
    }

    public function obatIndexBaru()
    {
    	return view('pages.obat-baru');
    }

    public function tambah()
    {
    	return view('pages.tambah');
    }

    public function transaksiResep()
    {
    	return view('pages.resep');
    }

    public function detailResep($id)
    {
    	return view('pages.detail');
    }

    public function nonResep()
    {
    	return view('pages.non-resep');
    }
}
