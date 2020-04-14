<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        //send data mahasiswa ke view index
        return view('index',['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        //call view add
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/mahasiswa');
    }

    public function detail($id)
    {
        //put data mahasiswa berdasar id yg dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        //send data mahasiswa yg diambil ke view edit.blade.php
        return view('detail',['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        //put data mahasiswa berdasar id yg dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        //send data mahasiswa yg diambil ke view edit.blade.php
        return view('edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        //menghapus data mhs berdasarkan id yg diplh
        DB::table('mahasiswa')->where('id',$id)->delete();

        return redirect('/mahasiswa');
    }
}
