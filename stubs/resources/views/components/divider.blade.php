@props(['space' => 4, 'align' => 'center', 'dividerClass' => ''])
@hui('text-%s', $align)
@hui('my-%s', $space)

@php
    $class = '';
    $class .= ' text-'.$align;
    $class .= ' my-'.$space;
    if (empty($dividerClass)) {
        if ($align === 'left' || $align === 'right') {
            $dividerClass = ' px-3 mx-4';
        } else {
            $dividerClass = ' px-3';
        }
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-divider w-auto max-w-full'.$class]) }} style="line-height: 0;">
    @if (strlen($slot))
    <span class="hui-divider__content{{ $dividerClass }}">{{ $slot }}</span>
    @endif
</div>