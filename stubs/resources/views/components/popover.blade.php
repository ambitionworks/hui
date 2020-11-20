@props(['handle' => '', 'position' => 'bl', 'contentClass' => '', 'hover' => false])

@php
    switch ($position) {
        case 'rc':
            $positioning = ' absolute left-full top-1/2 transform origin-right -translate-y-1/2';
            break;
        case 'lc':
            $positioning = ' absolute right-full top-1/2 transform origin-left -translate-y-1/2';
            break;
        case 'tl':
            $positioning = ' absolute bottom-full left-0 transform origin-bottom-left';
            break;
        case 'tc':
            $positioning = ' absolute bottom-full right-1/2 transform origin-bottom translate-x-1/2';
            break;
        case 'tr':
            $positioning = ' absolute bottom-full right-0 transform origin-bottom-right';
            break;
        case 'bl':
            $positioning = ' absolute left-0 transform origin-top-left';
            break;
        case 'bc':
            $positioning = ' absolute right-1/2 transform origin-top translate-x-1/2';
            break;
        case 'br':
            $positioning = ' absolute right-0 transform origin-top-right';
    }

    if ($hover) {
        $trigger = '@mouseenter="open = true"';
        $leaving = '@mouseleave="open = false"';
    } else {
        $trigger = '@click="open = !open"';
        $leaving = '@keydown.window.escape="open = false" @click.away="open = false"';
    }
@endphp

<div x-data="{ open: false }" {!! $leaving !!} {{ $attributes->merge(['class' => 'hui-popover relative']) }}>
    <div {!! $trigger !!} role="button" class="hui-popover__handle">{{ $handle }}</div>
    <div x-show="open" class="hui-popover__content z-10 {{ $positioning }}{{ $contentClass ? ' '.$contentClass : '' }}">
        {{ $slot }}
    </div>
</div>
