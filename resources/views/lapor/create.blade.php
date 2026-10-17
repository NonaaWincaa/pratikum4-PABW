@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>
    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian:</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>

        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" required>
        </div>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
@endsection