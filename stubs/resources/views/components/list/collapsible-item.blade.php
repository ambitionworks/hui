@props(['handle' => '', 'key' => ''])

@php
    $attributes['id'] = !empty($key) ? $key : uniqid('list-collapsible-');
@endphp

<div id="{{ $key }}" {{ $attributes->merge(['class' => 'hui-list__item--collapsible']) }}>
    <div @click="selected['{{ $key }}'] = !selected['{{ $key }}']" class="hui-list__item-handle" role="button">{{ $handle }}</div>
    <div class="hui-list__item-content" x-show="selected['{{ $key }}'] === true">
        {{ $slot }}
    </div>
</div>