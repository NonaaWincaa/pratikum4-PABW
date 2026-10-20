@props(['type' => 'success'])

@php
    $bgClass = $type === 'success' ? 'bg-emerald-100 border-emerald-500 text-emerald-800' : 'bg-rose-100 border-rose-500 text-rose-800';
@endphp

<div class="p-4 mb-6 rounded-xl border-l-4 shadow-sm {{ $bgClass }} flex items-center justify-between" role="alert">
    <div class="flex items-center gap-3">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
        <span class="font-medium text-sm md:text-base">{{ $slot }}</span>
    </div>
</div>