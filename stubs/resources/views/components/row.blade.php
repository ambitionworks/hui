@props(['gap' => '', 'size' => ''])
@hui('space-x-%s', $gap)

@php
    $class = '';
    if (!empty($size)) {
        switch ($size) {
            case 'sm':
                $size = ' max-w-screen-sm';
                break;
            case 'md':
                $size = ' max-w-screen-md';
                break;
            case 'lg':
                $size = ' max-w-screen-lg';
                break;
            case 'xl':
                $size = ' max-w-screen-xl';
                break;
            case 'full':
            default:
                $size = ' max-w-full';
                break;
        }
    }

    if (!empty($gap)) {
        $class .= ' space-x-'.$gap;
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-row flex'.$class]) }}>
    {{ $slot }}
</div>