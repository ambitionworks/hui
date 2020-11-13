@props(['palette' => '', 'size' => ''])

@php
    $class = '';
    if (!empty($size)) {
        $class .= " hui--size-$size";
    }
    if (!empty($palette)) {
        $class .= " hui--palette-$palette";
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-card'.$class]) }}>
    {{ $slot }}
</div>