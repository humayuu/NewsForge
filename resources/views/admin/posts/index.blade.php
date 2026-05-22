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

                        {{-- Row 1 --}}
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://placehold.co/60x45" width="60" height="45"
                                    style="object-fit:cover; border-radius:6px;">
                            </td>
                            <td>John Doe</td>
                            <td>
                                <span class="badge bg-primary">Technology</span>
                            </td>
                            <td>How to Learn Laravel</td>
                            <td>
                                <span class="badge bg-success">
                                    <i class="fa fa-globe me-1"></i> Published
                                </span>
                            </td>
                            <td>20 May 2025</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-secondary">
                                        <i class="fa fa-box-archive"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
