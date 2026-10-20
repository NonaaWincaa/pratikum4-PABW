@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto text-center py-10">
    @if(session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h2 class="text-2xl font-bold text-slate-800 mb-2">Terima Kasih!</h2>
        <p class="text-slate-600 mb-6">Data laporan Anda telah tersimpan di database BPBD Kabupaten Bandung untuk ditindaklanjuti.</p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-3">
            <a href="{{ route('laporbanjir.index') }}" class="px-5 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white font-semibold rounded-xl transition">
                Lihat Semua Laporan
            </a>
            <a href="{{ route('laporbanjir.form') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition">
                Input Laporan Lain
            </a>
        </div>
    </div>
</div>
@endsection