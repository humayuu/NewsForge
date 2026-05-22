@extends('admin.layout')

@section('main')
    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-flex flex-column flex-sm-row align-items-sm-center justify-content-between mb-4">

        <div>
            <h3 class="fw-bold text-primary mb-1">Create Category</h3>
            <p class="text-muted mb-0">
                Add a new category for organizing posts.
            </p>
        </div>

        <div class="mt-3 mt-sm-0">
            <a href="{{ route('admin.category.index') }}" class="btn btn-outline-primary rounded-3">
                <i class="fa fa-arrow-left me-1"></i>
                Back Category
            </a>
        </div>

    </div>

    <!-- Form Section -->
    <div class="row justify-content-center">

        <div class="col-lg-6 col-xl-5">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body p-4 p-lg-5">

                    <!-- Heading -->
                    <div class="mb-4 text-center">
                        <h4 class="fw-bold mb-1">
                            Category Details
                        </h4>

                        <p class="text-muted small mb-0">
                            Enter the category name below.
                        </p>
                    </div>

                    <!-- Form -->
                    <form class="row g-4" action="{{ route('admin.category.store') }}" method="POST">

                        @csrf

                        <!-- Category Name -->
                        <div class="col-12">

                            <label for="category_name" class="form-label fw-semibold">
                                Category Name
                                <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                class="form-control rounded-3 @error('category_name') is-invalid @enderror"
                                id="category_name" name="category_name" value="{{ old('category_name') }}"
                                placeholder="Enter category name" autofocus>

                            @error('category_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <!-- Buttons -->
                        <div class="col-12">

                            <div class="d-flex gap-2">

                                <button type="submit" class="btn btn-primary px-4 rounded-3">
                                    <i class="fa fa-plus-circle me-1"></i>
                                    Create Category
                                </button>

                                <a href="{{ route('admin.category.index') }}" class="btn btn-light border px-4 rounded-3">
                                    Cancel
                                </a>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
