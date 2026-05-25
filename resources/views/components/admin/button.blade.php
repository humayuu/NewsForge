@props([
    'size' => 'md',
    'type' => 'primary',
    'message' => null,
    'icon' => null,
    'plain' => false,
])

<button type="submit" {{ $attributes->merge(['class' => $plain ? '' : "btn btn-$size btn-$type"]) }}
    @if ($message) onclick="return confirm('{{ $message }}')" @endif>

    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif

    {{ $slot }}
</button>
