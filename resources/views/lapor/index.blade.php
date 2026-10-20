@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<div class="space-y-4">
    <!-- Header Title & Tombol Tambah -->
    <div class="flex items-center justify-between border-b border-slate-200 pb-3">
        <div>
            <h2 class="text-base font-bold text-slate-800 flex items-center gap-2">
                <i class="fa-solid fa-table-list text-emeraldCustom"></i>
                Daftar Laporan Kejadian Banjir
            </h2>
            <p class="text-xs text-slate-500">Data realtime kejadian banjir dari database.</p>
        </div>
        <!-- Tombol Tambah Diperbaiki Link & Warna Emerald Customnya -->
        <a href="{{ route('laporbanjir.form') }}" class="bg-emeraldCustom hover:bg-emerald-800 text-white text-xs px-3.5 py-2 rounded-lg font-medium shadow-sm transition flex items-center gap-1.5">
            <i class="fa-solid fa-plus"></i> Tambah
        </a>
    </div>

    <!-- Tampilan Jika Data Kosong / Terisi -->
    @if(isset($laporanList) && count($laporanList) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
            @foreach($laporanList as $item)
                @include('partials.laporan-card', ['item' => $item])
            @endforeach
        </div>
    @elseif(isset($laporan) && count($laporan) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
            @foreach($laporan as $item)
                @include('partials.laporan-card', ['item' => $item])
            @endforeach
        </div>
    @else
        <div class="bg-white p-8 text-center rounded-xl border border-slate-200 text-slate-500 text-sm shadow-sm">
            <i class="fa-solid fa-inbox text-3xl mb-2 text-slate-300"></i>
            <p>Belum ada laporan banjir yang masuk.</p>
        </div>
    @endif
</div>
@endsection