@props(['handle' => '', 'key' => ''])

@php
    $attributes['id'] = !empty($key) ? $key : uniqid('list-collapsible-');
@endphp

<div {{ $attributes->merge(['class' => 'hui-list__item--accordion']) }}>
    <div @click="selected = '{{ $key }}'" class="hui-list__item-handle" role="button">{{ $handle }}</div>
    <div class="hui-list__item-content" x-show="selected === '{{ $key }}'">
        {{ $slot }}
    </div>
</div>