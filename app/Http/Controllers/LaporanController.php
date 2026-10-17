<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Menampilkan halaman form input laporan
    public function form()
    {
        return view('laporbanjir.form');
    }

    // Menyimpan data dari form ke database
    public function simpan(Request $request)
    {
        // Validasi input sederhana
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer',
            'tanggal_kejadian' => 'required|date',
        ]);

        // Simpan ke database menggunakan Model Laporan
        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect('/daftar-laporan')->with('success', 'Data laporan berhasil disimpan!');
    }

    // Menampilkan daftar laporan dari database
    public function daftar()
    {
        $laporans = Laporan::all();
        return view('laporbanjir.daftar', compact('laporans'));
    }
}