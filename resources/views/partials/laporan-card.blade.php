<div class="card">
    <h3>Lokasi: {{ $item['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $item['nama_pelapor'] }}</p>
    <p><strong>Tinggi Air:</strong> {{ $item['tinggi_air'] }} cm</p>

    <p>Status Genangan: 
        @if($item['tinggi_air'] < 30)
            <span class="status status-waspada">Waspada</span>
        @elseif($item['tinggi_air'] >= 30 && $item['tinggi_air'] <= 70)
            <span class="status status-siaga">Siaga</span>
        @else
            <span class="status status-awas">Awas</span>
        @endif
    </p>
</div>