@props(['handle', 'key' => '', 'handleClass' => '', 'containerClass' => ''])

@php
    $attributes['id'] = !empty($key) ? $key : uniqid('list-collapsible-');
    $attributes->merge(['class' => 'hui-list__item-content']);
@endphp

<div class="hui-list__item--accordion{{ !empty($containerClass) ? ' '.$containerClass : '' }}" {{ $attributes->except(['class']) }}>
    <div @click="selected['{{ $key }}'] = !selected['{{ $key }}']" class="hui-list__item-handle{{ !empty($handleClass) ? ' '.$handleClass : '' }}" role="button">{{ $handle }}</div>
    <div class="{{ $attributes['class'] }}" x-show="selected['{{ $key }}'] === true">
        {{ $slot }}
    </div>
</div>
