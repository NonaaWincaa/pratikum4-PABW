@php
    $namaPelapor = is_array($item) ? ($item['nama_pelapor'] ?? '-') : ($item->nama_pelapor ?? '-');
    $lokasi = is_array($item) ? ($item['lokasi'] ?? '-') : ($item->lokasi ?? '-');
    $tinggi = is_array($item) ? ($item['tinggi_genangan'] ?? $item['tinggi_air'] ?? 0) : ($item->tinggi_genangan ?? $item->tinggi_air ?? 0);
    $tanggal = is_array($item) ? ($item['tanggal_kejadian'] ?? $item['tanggal'] ?? now()) : ($item->tanggal_kejadian ?? $item->tanggal ?? now());

    if ($tinggi >= 100) {
        $status = 'AWAS';
        $badgeClass = 'bg-rose-100 text-rose-800 border-rose-300';
        $borderLeft = 'border-rose-500';
        $icon = 'fa-radiation';
    } elseif ($tinggi >= 50) {
        $status = 'SIAGA';
        $badgeClass = 'bg-amber-100 text-amber-800 border-amber-300';
        $borderLeft = 'border-amber-500';
        $icon = 'fa-triangle-exclamation';
    } else {
        $status = 'WASPADA';
        $badgeClass = 'bg-emerald-100 text-emeraldCustom border-emerald-300';
        $borderLeft = 'border-emeraldCustom';
        $icon = 'fa-circle-info';
    }
@endphp

<div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition border-l-4 {{ $borderLeft }} border border-slate-100 flex flex-col justify-between">
    <div>
        <div class="flex items-center justify-between mb-2">
            <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full border {{ $badgeClass }} flex items-center gap-1.5">
                <i class="fa-solid {{ $icon }}"></i> {{ $status }}
            </span>
            <span class="text-xs text-slate-400 font-medium flex items-center gap-1">
                <i class="fa-regular fa-calendar"></i>
                {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
            </span>
        </div>
        
        <h3 class="text-base font-bold text-slate-800 mb-0.5 flex items-center gap-1.5">
            <i class="fa-solid fa-location-dot text-emeraldCustom text-sm"></i>
            {{ $lokasi }}
        </h3>
        
        <p class="text-xs text-slate-500 mb-3 flex items-center gap-1">
            <i class="fa-solid fa-user text-slate-400 text-[10px]"></i>
            Pelapor: <span class="font-semibold text-slate-700">{{ $namaPelapor }}</span>
        </p>
    </div>
    
    <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
        <span class="text-slate-500">Tinggi Genangan:</span>
        <span class="font-extrabold text-lavenderText text-sm px-2 py-0.5 bg-lavenderCustom rounded-md border border-purple-200">
            {{ $tinggi }} cm
        </span>
    </div>
</div>