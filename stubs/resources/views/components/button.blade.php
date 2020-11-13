@props([
    'disabled' => false,
    'pop' => false,
    'loading' => false,
    'size' => 'base',
    'palette' => ''
])

@php
    $class = '';
    $class .= " hui--size-$size";
    if ($pop) {
        $class .= ' transform hover:-translate-y-1';
    }
    if (!empty($palette)) {
        $class .= " hui--palette-$palette";
    }
@endphp

<button {{ $attributes->merge(['class' => 'hui-button'.$class]) }}{{ $disabled ? ' disabled' : '' }}>
    @if ($loading)
    <x-loading />
    @endif
    {{ $slot }}
</button>