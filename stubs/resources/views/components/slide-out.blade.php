@props(['position' => ''])

@php
    $class = 'max-w-screen fixed transform ';
    switch ($position) {
        case 'bottom':
            $class .= 'inset-x-0 bottom-0';
            $closedClass = 'translate-y-full';
            break;
        case 'top':
            $class .= 'inset-x-0 top-0';
            $closedClass = '-translate-y-full';
            break;
        case 'left':
            $class .= 'inset-y-0 left-0';
            $closedClass = '-translate-x-full';
            break;
        case 'right':
        default:
            $class .= 'inset-y-0 right-0';
            $closedClass = 'translate-x-full';
            break;
    }
@endphp

<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="hui-slide-out">
    <div @click="open = !open" role="button" class="hui-slide-out__handle inline-block">{{ $handle }}</div>
    <div :class="{ '{{ $closedClass }}': !open }" {{ $attributes->merge(['class' => 'hui-slide-out__content '.$class]) }} x-cloak>
        {{ $slot }}
    </div>
</div>