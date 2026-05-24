@extends('admin.layout')

@section('main')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3 fs-3">Posts</div>
        <div class="ms-auto">
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                <i class="fa fa-plus me-1"></i> Create Post
            </a>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card radius-15">
        <div class="card-body mx-5">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Published At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    <img src="{{ asset('storage/' . $post->image_path) }}" width="60" height="45"
                                        style="object-fit:cover; border-radius:6px;">
                                </td>
                                <td>{{ $post->user->first_name . ' ' . $post->user->last_name }}</td>
                                <td>
                                    <span class="badge bg-primary fs-6">{{ $post->category->category_name }}</span>
                                </td>
                                <td class="fs-6">{{ $post->title }}</td>
                                <td>
                                    <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'secondary' }}">
                                        <i
                                            class="fa fa-{{ $post->status == 'published' ? 'globe' : 'box-archive' }} fs-5 me-1"></i>
                                        {{ Str::upper($post->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if ($post->status === 'published')
                                        <span class="fw-bold bg-success-subtle text-success  border border-success-subtle">
                                            <i class="bi bi-check-circle me-1"></i>
                                            {{ $post->published_at->format('d M Y') }}
                                        </span>
                                    @else
                                        <span class="fw-bold bg-warning-subtle text-primary  border border-warning-subtle">
                                            <i class="bi bi-file-earmark me-1"></i>
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="#" class="btn btn-sm btn-dark" title="View Post">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary" title="Edit Post">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-success">
                                            <i class="fa fa-globe"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-box-archive"></i>
                                        </a>
                                        <x-admin.button size="sm" type="danger" message="Are You Sure ?"
                                            icon="trash" />
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger mt-5 fs-4">No Posts found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
