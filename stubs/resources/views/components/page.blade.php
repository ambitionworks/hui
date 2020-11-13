@props(['header' => '', 'footer' => '', 'size' => ''])

@php
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
@endphp

<section {{ $attributes->merge(['class' => 'hui-page flex flex-col min-h-screen mx-auto'.$size]) }}>
    {{ $header }}
    <main class="hui-page__content flex-grow">
        {{ $slot }}
    </main>
    {{ $footer }}
</section>