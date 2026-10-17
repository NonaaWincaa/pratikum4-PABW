@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan berhasil dikirim dan disimpan oleh sistem!" />

    <div class="card">
        <h3>Detail Laporan Diterima:</h3>
        <p><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}</p>
        <p><strong>Lokasi:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Air:</strong> {{ $data['tinggi_air'] }} cm</p>
    </div>

    <a href="{{ route('lapor.create') }}">Kirim Laporan Lain</a> | 
    <a href="{{ route('lapor.index') }}">Lihat Semua Laporan</a>
@endsection