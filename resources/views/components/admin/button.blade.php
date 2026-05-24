@props(['size' => 'md', 'type' => 'primary', 'message' => 'Are you sure?', 'icon' => null])

<button type="submit" class="btn btn-{{ $size }} btn-{{ $type }}"
    onclick="return confirm('{{ $message }}')">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif

    {{ $slot }}
</button>
