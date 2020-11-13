@props(['default' => '', 'handlesClass' => '', 'contentClass' => ''])

@php
    $selected = 'null';
    if (is_string($default) && !empty($default)) {
        $selected = "'$default'";
    }
@endphp

<div x-data="{ selected: {{ $selected }} }" {{ $attributes->merge(['class' => 'hui-tabs']) }}>
    <div class="hui-tabs__handles{{ $handlesClass ? " $handlesClass" : '' }}">{{ $handles }}</div>
    <div class="hui-tabs__content{{ $contentClass ? " $contentClass" : '' }}">{{ $slot }}</div>
</div>