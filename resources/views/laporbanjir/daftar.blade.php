<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Laporan Banjir</title>
</head>
<body>
    <h2>Daftar Laporan Banjir (Database & Seeder)</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Pelapor</th>
            <th>Lokasi</th>
            <th>Tinggi Genangan</th>
            <th>Tanggal Kejadian</th>
        </tr>
        @foreach($laporans as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nama_pelapor }}</td>
            <td>{{ $mhs->lokasi }}</td>
            <td>{{ $mhs->tinggi_genangan }} cm</td>
            <td>{{ $mhs->tanggal_kejadian }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/form-laporan">+ Input Laporan Baru</a>
</body>
</html>