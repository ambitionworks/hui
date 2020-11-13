@props([
    'p' => true,
    'span' => false,
    'h1' => false,
    'h2' => false,
    'h3' => false,
    'h4' => false,
    'h5' => false,
    'h6' => false,
    'b' => false,
    'i' => false,
    'size' => '',
])
@hui('text-%s', $size)

@php
    if ($h1) {
        $tagName = 'h1';
    } else if ($h2) {
        $tagName = 'h2';
    } else if ($h3) {
        $tagName = 'h3';
    } else if ($h4) {
        $tagName = 'h4';
    } else if ($h5) {
        $tagName = 'h5';
    } else if ($h6) {
        $tagName = 'h6';
    } else if ($span) {
        $tagName = 'span';
    } else if ($p) {
        $tagName = 'p';
    }

    $class = '';
    if ($b) {
        $class .= ' font-bold';
    }
    if ($i) {
        $class .= ' italic';
    }
    if (!empty($size)) {
        $class .= ' text-'.$size;
    }
@endphp

<{{ $tagName }} {{ $attributes->merge(['class' => 'hui-text'.$class]) }}>
    {{ $slot }}
</{{ $tagName }}>