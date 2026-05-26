    <div class="page-breadcrumb d-flex flex-column flex-sm-row align-items-sm-center justify-content-between mb-4">

        <div>
            <h3 class="fw-bold text-primary mb-1">{{ $title }}</h3>
            <p class="text-muted mb-0">{{ $shortDescription }}</p>
        </div>

        <div class="mt-3 mt-sm-0">
            <a href="{{ route("$route") }}" class="btn btn-{{ $type }}">
                <i class="fa fa-{{ $icon }}"></i> {{ $message }}
            </a>
        </div>

    </div>
