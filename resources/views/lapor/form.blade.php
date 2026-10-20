@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow-sm border border-sky-100">
    <div class="mb-4 border-b border-sky-100 pb-3">
        <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
            <i class="fa-solid fa-file-pen text-softBluePrimary"></i>
            Form Input Lapor Banjir
        </h2>
        <p class="text-xs text-slate-500">Masukkan rincian bencana banjir secara akurat.</p>
    </div>

    <form action="{{ route('laporbanjir.store') }}" method="POST" class="space-y-3.5 text-xs md:text-sm">
        @csrf

        <div>
            <label for="nama_pelapor" class="block font-semibold text-slate-700 mb-1">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" id="nama_pelapor" required
                class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-softBluePrimary/50 transition text-xs"
                placeholder="Masukkan nama Anda">
        </div>

        <div>
            <label for="lokasi" class="block font-semibold text-slate-700 mb-1">Kecamatan (Lokasi)</label>
            <select name="lokasi" id="lokasi" required
                class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-softBluePrimary/50 transition bg-white text-xs">
                <option value="" disabled selected>-- Pilih Kecamatan --</option>
                <option value="Dayeuhkolot">Dayeuhkolot</option>
                <option value="Baleendah">Baleendah</option>
                <option value="Bojongsoang">Bojongsoang</option>
                <option value="Rancaekek">Rancaekek</option>
                <option value="Majalaya">Majalaya</option>
            </select>
        </div>

        <div>
            <label for="tinggi_genangan" class="block font-semibold text-slate-700 mb-1">Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi_genangan" id="tinggi_genangan" min="1" required
                class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-softBluePrimary/50 transition text-xs"
                placeholder="Contoh: 70">
        </div>

        <div>
            <label for="tanggal_kejadian" class="block font-semibold text-slate-700 mb-1">Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian" id="tanggal_kejadian" required
                value="{{ date('Y-m-d') }}"
                class="w-full px-3 py-2 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-softBluePrimary/50 transition text-xs">
        </div>

        <button type="submit"
            class="w-full py-2.5 bg-softBluePrimary hover:bg-sky-600 text-white font-bold rounded-lg shadow-sm transition duration-200 flex justify-center items-center gap-2 mt-2">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Kirim Laporan</span>
        </button>
    </form>
</div>
@endsection