@props(['default' => ''])

@php
    $selected = '{}';
    if (is_string($default) && !empty($default)) {
        $selected = "'$default'";
    } else if (is_array($default) && count($default)) {
        $selected = '{'.implode(',', array_map(function ($element) { return "'$element': true"; }, $default, )).'}';
    }
@endphp

<div x-data="{ selected: {{ $selected }} }" {{ $attributes->merge(['class' => 'hui-list']) }}>
    {{ $slot }}
</div>