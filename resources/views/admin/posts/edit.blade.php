@extends('admin.layout')

@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Create Pos" shortDescription="Edit blog post." route="admin.post.index" icon="arrow-left me-1"
        message="Back to Post" />

    <x-admin.form route="admin.post.update" :id="$post->id" method="PUT" encType="multipart/form-data">

        <div class="row g-4">

            <!-- LEFT PORTION -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="fw-bold mb-1">Post Details</h5>
                            <p class="text-muted small mb-0">Add title, category and featured image.</p>
                        </div>

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold">
                                Title <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control rounded-3 @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ $post->title }}" placeholder="Enter post title"
                                autofocus>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-semibold">
                                Category <span class="text-danger">*</span>
                            </label>
                            <select class="form-select select2 @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id" style="width: 100%;">
                                <option value="">Select category</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @empty
                                    <option value="" disabled>No Category Found</option>
                                @endforelse
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div>
                            <label for="image" class="form-label fw-semibold">Featured Image</label>
                            <input type="file" class="form-control rounded-3 @error('image') is-invalid @enderror"
                                id="image" name="image">
                            <small class="text-muted">Recommended size: 1200×630px</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <img class="mt-2" src="{{ asset('storage/' . $post->image_path) }}" width="200">

                    </div>
                </div>
            </div>

            <!-- RIGHT PORTION -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="fw-bold mb-1">Content & Publish</h5>
                            <p class="text-muted small mb-0">Write content and choose publish status.</p>
                        </div>

                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="form-label fw-semibold">
                                Content <span class="text-danger">*</span>
                            </label>

                            <textarea id="content" name="content">{{ $post->content }}</textarea>

                            @error('content')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <button type="submit" class="btn btn-primary px-4 rounded-3">
                                <i class="fa fa-plus-circle me-1"></i> Update Post
                            </button>
                            <a href="{{ route('admin.post.index') }}" class="btn btn-light border px-4 rounded-3">
                                Cancel
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </x-admin.form>
@endsection

@push('styles')
    <script src="https://cdn.tiny.cloud/1/ipecvicv0hfws0f638gkuupueg2moq5pzadav0h1edc0g2dq/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
@endpush

@push('scripts')
    <script>
        // Select2
        $(document).ready(function() {
            $('#category_id').select2({
                placeholder: "Select category",
                allowClear: true,
                width: '100%'
            });
        });

        // TinyMCE
        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link',
                'charmap', 'preview', 'anchor', 'searchreplace',
                'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'table', 'wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic underline | \
                                                                                                                                              alignleft aligncenter alignright alignjustify | \
                                                                                                                                              bullist numlist outdent indent | link | \
                                                                                                                                              preview fullscreen code',
            content_style: `
            body {
                font-family: Arial, sans-serif;
                font-size: 15px;
                line-height: 1.7;
                padding: 10px 20px;
            }
        `
        });
    </script>
@endpush
