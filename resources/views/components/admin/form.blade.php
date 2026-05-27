@props(['route', 'id' => null, 'method' => 'POST', 'class' => null, 'encType' => null])

<form class="{{ $class }}" action="{{ route($route, $id) }}" method="POST" enctype="{{ $encType }}">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    {{ $slot }}
</form>
