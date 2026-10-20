<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - by wincarlinn</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        softBluePrimary: '#4A90E2',
                        softBlueHeader: '#1E3A8A',
                        softBlueBg: '#F0F7FF',
                        softBlueBadge: '#E0F2FE',
                        softBlueText: '#0369A1',
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-softBlueBg font-sans text-slate-800 antialiased min-h-screen flex flex-col justify-between overflow-x-hidden">

    <!-- Header / Navbar -->
    <header class="bg-softBlueHeader text-white shadow-sm sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-graduation-cap text-sky-300 text-lg"></i>
                <span class="font-bold text-sm tracking-wide">Praktikum Laravel</span>
            </div>
            <span class="bg-sky-900 text-sky-200 text-xs font-medium px-2.5 py-0.5 rounded-md border border-sky-700">
                Mahasiswa
            </span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-4 py-6 flex-grow w-full">
        <div class="space-y-4">
            <!-- Title Bar -->
            <div class="flex items-center justify-between border-b border-sky-200 pb-3">
                <div>
                    <h2 class="text-base font-bold text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-users text-softBluePrimary"></i>
                        Daftar Mahasiswa
                    </h2>
                    <p class="text-xs text-slate-500">Data mahasiswa terdaftar di database.</p>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-xl shadow-sm border border-sky-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-softBluePrimary text-white uppercase text-[11px] font-semibold tracking-wider">
                                <th class="py-2.5 px-4">ID</th>
                                <th class="py-2.5 px-4">Nama</th>
                                <th class="py-2.5 px-4">Email / NIM</th>
                                <th class="py-2.5 px-4">Jurusan</th>
                                <th class="py-2.5 px-4 text-center">Umur</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-sky-50 text-slate-700">
                            @if(isset($mahasiswa) && count($mahasiswa) > 0)
                                @foreach($mahasiswa as $mhs)
                                    <tr class="hover:bg-sky-50/60 transition">
                                        <td class="py-2.5 px-4 font-mono font-semibold text-slate-400">{{ $mhs->id }}</td>
                                        <td class="py-2.5 px-4 font-bold text-slate-800">{{ $mhs->nama }}</td>
                                        <td class="py-2.5 px-4 text-slate-600">{{ $mhs->email ?? $mhs->nim ?? '-' }}</td>
                                        <td class="py-2.5 px-4">
                                            <span class="bg-softBlueBadge text-softBlueText text-[11px] font-medium px-2 py-0.5 rounded-md border border-sky-200">
                                                {{ $mhs->jurusan }}
                                            </span>
                                        </td>
                                        <td class="py-2.5 px-4 text-center font-medium">{{ $mhs->umur ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="py-6 text-center text-slate-400 italic">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-3 text-center text-xs border-t border-slate-800">
        <p>&copy; {{ date('Y') }} Praktikum wincarlinn. All rights reserved.</p>
    </footer>

</body>
</html>