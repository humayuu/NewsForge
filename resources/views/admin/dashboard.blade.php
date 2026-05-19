<h1>Dashboard</h1>
@if (Auth::check())
    <li class="d-flex align-items-center gap-2">
        <span class="text-muted small">
            <i class="fa fa-user me-1 text-white"></i>{{ Auth::user()->first_name }}
        </span>
        <form method="POST" action="{{ route('logout') }}" class="mb-0">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="fa fa-sign-out me-1"></i> Logout
            </button>
        </form>
    </li>
@else
    <li>
        <a href="{{ route('login') }}" class="btn btn-danger btn-sm" title="">
            <i class="fa fa-sign-in me-1"></i> Login / Register
        </a>
    </li>
@endif
