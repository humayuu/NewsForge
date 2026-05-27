@extends('admin.layout')

@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Edit Category" shortDescription="Edit category for organizing posts."
        route="admin.category.index" type="primary" message="Back to Category" icon="arrow-left me-1" />

    <!-- Form Section -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-12">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-lg-5">

                    <div class="mb-4">
                        <h4 class="fw-bold mb-1">Category Details</h4>
                        <p class="text-muted small mb-0">Enter the category information below.</p>
                    </div>

                    <x-admin.form route="admin.category.update" :id="$category->id" method="PUT">

                        <!-- Category Name -->
                        <div class="col-6">
                            <label for="category_name" class="form-label fw-semibold">
                                Category Name <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                class="form-control rounded-3 @error('category_name') is-invalid @enderror"
                                id="category_name" name="category_name" value="{{ $category->category_name }}"
                                placeholder="e.g. Technology, Sports, Politics" autofocus>

                            @error('category_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <label for="slug" class="form-label mt-3 fw-semibold">
                                Slug <span class="text-danger">*</span>
                            </label>

                            <input type="text" class="form-control rounded-3" id="slug" name="slug" readonly
                                disabled value="{{ $category->slug }}">
                        </div>

                        <!-- Description  -->
                        <div class="col-6">
                            <label for="description" class="form-label fw-semibold">
                                Description <span class="text-muted small fw-normal">(Optional)</span>
                            </label>

                            <textarea class="form-control rounded-3 @error('description') is-invalid @enderror" id="description" name="description"
                                rows="5" placeholder="Brief description of this category...">{{ $category->description }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="col-12">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary px-4 rounded-3">
                                    <i class="fa fa-plus-circle me-1"></i> Create Category
                                </button>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-light border px-4 rounded-3">
                                    Cancel
                                </a>
                            </div>
                        </div>

                    </x-admin.form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const slugFunction = () => {
            const inputEl = document.getElementById('slug');
            const categoryInput = document.getElementById('category_name');

            categoryInput.addEventListener('input', function() {
                inputEl.value = this.value
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_]+/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-+|-+$/g, '');
            });
        }

        slugFunction();
    </script>
@endpush
