@extends('admin.layout')

@section('main')
    {{-- Breadcrumb --}}
    <div class="page-breadcrumb d-flex flex-column flex-sm-row align-items-sm-center justify-content-between mb-4">
        <div>
            <h3 class="fw-bold text-primary mb-1">Post Detail</h3>
        </div>
        <div class="mt-3 mt-sm-0">
            <x-admin.anchor route="admin.post.index" type="outline-primary rounded-3" icon="arrow-left me-1"
                title="Back to Posts">
                Back to Posts
            </x-admin.anchor>
        </div>
    </div>

    {{-- Post Detail Card --}}
    <div class="row g-4">

        {{-- Image Column --}}
        <div class="col-12 col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="card-title text-muted mb-3">Post Image</h6>
                    @if ($post->image_path)
                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}"
                            class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                    @else
                        <div class="text-muted fst-italic">No image available</div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Details Column --}}
        <div class="col-12 col-md-8">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-title text-muted mb-3">Post Information</h6>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Title: </span>
                            <span class="text-center fw-bold fs-6">{{ $post->title }}</span>
                        </li>

                        <li class="list-group-item">
                            <span class="fw-semibold text-secondary d-block mb-1">Content</span>
                            <p class="mb-0 text-muted">{!! $post->content !!}</p>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary ">Category</span>
                            <span class="badge bg-primary fs-6">{{ $post->category->category_name ?? 'N/A' }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Author</span>
                            <span class="badge bg-danger fs-6">{{ $post->user->first_name ?? '' }}
                                {{ $post->user->last_name ?? '' }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-semibold text-secondary">Status</span>
                            @php
                                $statusClass = match (strtolower($post->status)) {
                                    'published' => 'bg-success',
                                    'draft' => 'bg-secondary',
                                    'pending' => 'bg-warning text-dark',
                                    default => 'bg-light text-dark',
                                };
                            @endphp
                            <span class="badge {{ $statusClass }} fs-6">
                                {{ Str::upper($post->status) }}
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Published At</span>
                            <span class="badge bg-dark fs-6">
                                {{ $post->published_at ? $post->published_at->format('d M Y') : 'Not published' }}
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
