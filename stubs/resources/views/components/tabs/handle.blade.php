@props(['key', 'selectedClass' => ''])

@php
    if (!empty($selectedClass)) {
        $attributes[':class'] = '{ \''.$selectedClass.'\': selected === \''.$key.'\' }';
    }
@endphp

<div role="button" @click="selected = '{{ $key }}'" {{ $attributes->merge(['class' => 'hui-tabs__handle']) }}>
    {{ $slot }}
</div>