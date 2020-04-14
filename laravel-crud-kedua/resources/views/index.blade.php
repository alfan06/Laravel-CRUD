@extends('master')

<!-- Isi Judul -->
@section('title','Home')

<!-- Isi bagian Judul halaman -->
@section('judul_halaman','Data Mahasiswa')

<!-- Isi bagian konten -->
@section('konten')
    <a href="/mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    <br/>
    <br/>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>
                    <a href="/mahasiswa/detail/{{ $mhs->id }}" class="badge badge-info">Detail</a>
                    <a href="/mahasiswa/edit/{{ $mhs->id }}" class="badge badge-warning">Edit</a>
                    <a href="/mahasiswa/hapus/{{ $mhs->id }}" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection