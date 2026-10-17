<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f8f9fa; }
        header { background-color: #007bff; color: white; padding: 15px; text-align: center; border-radius: 5px; }
        nav { margin-top: 10px; }
        nav a { color: white; margin: 0 10px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { background: white; padding: 20px; border-radius: 5px; margin-top: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        footer { text-align: center; margin-top: 20px; font-size: 14px; color: #6c757d; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn { background: #28a745; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 4px; }
        .btn:hover { background: #218838; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
        .status { font-weight: bold; padding: 3px 8px; color: white; border-radius: 3px; display: inline-block; }
        .status-waspada { background-color: #ffc107; color: #212529; }
        .status-siaga { background-color: #fd7e14; }
        .status-awas { background-color: #dc3545; }
    </style>
</head>
<body>
    <header>
        <h1>Sistem Pelaporan LaporBanjir BPBD Kabupaten Bandung</h1>
        <nav>
            <a href="{{ route('lapor.create') }}">Form Pelaporan</a> |
            <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Aplikasi LaporBanjir - Wincarlinn</p>
    </footer>
</body>
</html>