@props(['route', 'id' => null, 'method' => 'POST'])

<form action="{{ route($route, $id) }}" method="POST">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    {{ $slot }}
</form>
