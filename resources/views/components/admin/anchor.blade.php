@props([
    'route' => null,
    'id' => null,
    'size' => 'md',
    'type' => 'primary',
    'icon' => null,
    'title' => null,
    'plain' => false,
])

<a @if ($title) title="{{ $title }}" @endif
    href="{{ $route ? ($id ? route($route, $id) : route($route)) : '#' }}"
    {{ $attributes->merge(['class' => $plain ? '' : "btn btn-$size btn-$type"]) }}>

    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif

    {{ $slot }}
</a>
