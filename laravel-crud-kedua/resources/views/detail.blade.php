@extends('master')

<!-- isi title -->
@section('title','Detail Mahasiswa')

<!-- isi bagian judul halaman -->
@section('judul_halaman','Detail Data Mahasiswa')

<!-- isi bagian konten halaman -->
@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>

    <br/>
    <br/>

    <h5 class="card-title">{{$mahasiswa->nama}}</h5>
    <p class="card-text">
        <label for=""><b> NIM : </b></label>
        {{$mahasiswa->nim}} </p>
    <p class="card-text">
        <label for=""><b> E-mail : </b></label>
        {{$mahasiswa->email}} </p>
    <p class="card-text">
        <label for=""><b> Jurusan : </b></label>
        {{$mahasiswa->jurusan}} </p>
@endsection