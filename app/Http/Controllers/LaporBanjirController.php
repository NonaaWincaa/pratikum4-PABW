<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Form Input Laporan
    public function form()
    {
        return view('lapor.form');
    }

    // Simpan Data Laporan ke Database
    public function simpan(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric|min:1',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect()->route('laporbanjir.index')->with('success', 'Laporan berhasil ditambahkan!');
    }

    // Tampilkan Daftar Laporan
    public function daftar()
    {
        $laporanList = Laporan::orderBy('created_at', 'desc')->get();
        return view('lapor.index', compact('laporanList'));
    }
}