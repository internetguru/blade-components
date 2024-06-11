@props([
    'href' => '#',
    'icon'
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-simple']) }}>
    @isset($icon)
        <i class="{{ $icon }}"></i>
    @endisset
    {{ $slot }}
</a>
