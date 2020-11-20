@props(['size' => ''])
@inject('hui', 'hui')

@php
    $width = '';
    $widthConverter = function ($size) use ($hui) {
        return $hui->track($size !== 12 ? 'w-'.$size.'/12' : ' w-full');
    };
    if (!empty($size)) {
        if (is_array($size)) {
            if (isset($size[0])) {
                $width = $widthConverter($size[0]);
                unset($size[0]);
            }
            foreach ($size as $breakpoint => $size) {
                $width .= $hui->track(" $breakpoint:".$widthConverter($size));
            }
        } else {
            $width = $widthConverter($size);
        }
    }
@endphp

<div {{ $attributes->merge(['class' => 'hui-col flex flex-col '.$width]) }}>
    {{ $slot }}
</div>