@props(['value' => false, 'palette' => ''])

@php
    $class = '';
    if (!empty($palette)) {
        $class .= " hui--palette-$palette";
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-badge align-middle inline-flex'.$class]) }}>
    @if ($value)
    {{ $value }}
    @else
    {{ $slot }}
    @endif
</div>