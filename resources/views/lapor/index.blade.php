@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Kejadian Banjir</h2>

    @forelse($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <p>Belum ada laporan banjir yang masuk.</p>
    @endforelse
@endsection