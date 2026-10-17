<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function create()
    {
        return view('lapor.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['nama_pelapor', 'lokasi', 'tinggi_air']);
        return view('lapor.konfirmasi', compact('data'));
    }

    public function index()
    {
        $laporan = [
            [
                'nama_pelapor' => 'richi',
                'lokasi' => 'Dayeuhkolot',
                'tinggi_air' => 25,
            ],
            [
                'nama_pelapor' => 'Siti',
                'lokasi' => 'Baleendah',
                'tinggi_air' => 50,
            ],
            [
                'nama_pelapor' => 'Ahmad',
                'lokasi' => 'Bojongsoang',
                'tinggi_air' => 85,
            ],
        ];

        return view('lapor.index', compact('laporan'));
    }
}