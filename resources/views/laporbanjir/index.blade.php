<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - Praktikum Laravel</title>
    <!-- CDN Tailwind CSS & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emeraldCustom: '#0A6B52',
                        goldCustom: '#C69968',
                        creamCustom: '#F9F3DC',
                        lavenderCustom: '#EDE7F6',
                        lavenderText: '#5E35B1',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-creamCustom/40 font-sans text-slate-800 antialiased min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar Compact -->
    <header class="bg-emeraldCustom text-white shadow-sm sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-graduation-cap text-goldCustom text-xl"></i>
                <span class="font-bold text-base tracking-wide">Praktikum Laravel</span>
            </div>
            <span class="bg-lavenderCustom text-lavenderText text-xs font-semibold px-2.5 py-1 rounded-md border border-lavenderText/20">
                Mahasiswa
            </span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-4 py-6 flex-grow w-full">
        <div class="space-y-4">
            <!-- Header Title -->
            <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                <div>
                    <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-users text-emeraldCustom"></i>
                        Daftar Mahasiswa
                    </h2>
                    <p class="text-xs text-slate-500">Data mahasiswa terdaftar di database.</p>
                </div>
            </div>

            <!-- Tabel Data Mahasiswa Compact -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-emeraldCustom text-white uppercase text-[11px] font-semibold tracking-wider">
                                <th class="py-2.5 px-4">ID</th>
                                <th class="py-2.5 px-4">Nama</th>
                                <th class="py-2.5 px-4">Email / NIM</th>
                                <th class="py-2.5 px-4">Jurusan</th>
                                <th class="py-2.5 px-4 text-center">Umur</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            @forelse($mahasiswa as $mhs)
                                <tr class="hover:bg-creamCustom/50 transition duration-150">
                                    <td class="py-2.5 px-4 font-mono font-semibold text-slate-500">{{ $mhs->id }}</td>
                                    <td class="py-2.5 px-4 font-bold text-slate-800">{{ $mhs->nama }}</td>
                                    <td class="py-2.5 px-4 text-slate-600">{{ $mhs->email ?? $mhs->nim }}</td>
                                    <td class="py-2.5 px-4">
                                        <span class="bg-lavenderCustom text-lavenderText text-[11px] font-medium px-2 py-0.5 rounded-md border border-purple-200">
                                            {{ $mhs->jurusan }}
                                        </span>
                                    </td>
                                    <td class="py-2.5 px-4 text-center font-medium">{{ $mhs->umur ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-6 text-center text-slate-400 italic">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Compact -->
    <footer class="bg-slate-900 text-slate-400 py-3 text-center text-xs border-t border-slate-800">
        <p>&copy; {{ date('Y') }} Praktikum Laravel. All rights reserved.</p>
    </footer>

</body>
</html>