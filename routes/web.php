<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();

        return view('siswa', compact('siswa'));
    }

    public function create()
    {
        return view('siswa');
    }

    public function store()
    {
        return redirect('/siswa');
    }
}
