@extends('layouts.app')

@section('judul', 'Tentang')

@section('isi')
    <h2>Tentang Pembuat Aplikasi</h2>
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Mata kuliah: Pemrograman Berbasis Web 2 (GBK2CAB4)</p>
@endsection
