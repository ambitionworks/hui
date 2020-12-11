@props(['handle' => '', 'backdropClass' => 'absolute inset-0 bg-black bg-opacity-25', 'contentClass' => 'flex items-end sm:items-center justify-center min-h-screen text-center'])

<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="hui-modal">
    <div @click="open = !open" role="button" class="hui-modal__handle inline-block">{{ $handle }}</div>
    <div x-show="open" class="fixed z-10 inset-0" x-cloak>
        <div class="{{ $contentClass }}">
            <div @click="open = false" class="fixed inset-0">
                <div class="{{ $backdropClass }}"></div>
            </div>
            <div {{ $attributes->merge(['class' => 'hui-modal__content align-middle z-20']) }}>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>