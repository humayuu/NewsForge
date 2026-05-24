@props([
    'route' => '#',
    'id' => null,
    'size' => 'md',
    'type' => 'primary',
    'icon' => null,
])

<a href="{{ $id ? route($route, $id) : route($route) }}"
    {{ $attributes->merge(['class' => "btn btn-$size btn-$type"]) }}>

    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif

    {{ $slot }}
</a>
