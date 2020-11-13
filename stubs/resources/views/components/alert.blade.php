@props(['title' => '', 'palette' => ''])

@php
    $class = '';
    if (!empty($palette)) {
        $class .= " hui--palette-$palette";
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-alert'.$class]) }}>
    @if ($title)
    <div class="hui-alert__title">{{ $title }}</div>
    @endif
    {{ $slot }}
</div>