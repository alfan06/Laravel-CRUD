@extends('master')

<!-- isi title -->
@section('title','Detail Mahasiswa')

<!-- isi bagian judul halaman -->
@section('judul_halaman','Edit Data Mahasiswa')

<!-- isi bagian konten halaman -->
@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>

    <br/>
    <br/>
    @foreach($mahasiswa as $mhs)
    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"> <br/>
        <div class="form-group">
            <label for="namamhs">Nama</label>
            <input type="text" class="form-control" required="required" name="namamhs" value="{{$mhs->nama }}"><br/>
        </div>
        <div class="form-group">
            <label for="nimmhs">NIM</label>
            <input type="number" class="form-control" required="required" name="nimmhs" value="{{$mhs->nim }}"><br/>
        </div>
        <div class="form-group">
            <label for="emailmhs">E-mail</label>
            <input type="email" class="form-control" required="required" name="emailmhs" value="{{$mhs->email }}"><br/>
        </div>
        <div class="form-group">
            <label for="jurusanmhs">Jurusan</label>
            <input type="text" class="form-control" required="required" name="jurusanmhs" value="{{$mhs->jurusan }}"><br/>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
    </form>
    @endforeach
@endsection