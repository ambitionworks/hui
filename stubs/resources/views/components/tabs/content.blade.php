@props(['key'])

<div x-show="selected === '{{ $key }}'" {{ $attributes->merge(['class' => 'hui-tabs__content']) }}>
    {{ $slot }}
</div>