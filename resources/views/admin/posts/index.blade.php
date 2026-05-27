@extends('admin.layout')
@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Posts" shortDescription="All Posts" route="admin.post.create" icon="plus"
        message="Create Post" />

    <div class="card radius-15">
        <div class="card-body mx-5">
            <div class="table-responsive" style="overflow: unset">
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
                                <td>{{ $post->full_name ?? 'Unknown' }}</td>
                                <td>
                                    <span class="badge bg-primary fs-6">{{ $post->category->category_name }}</span>
                                </td>
                                <td class="fs-6">{{ Str::substr($post->title, 0, 30) }}...</td>
                                <td>
                                    <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'secondary' }}">
                                        <i
                                            class="fa fa-{{ $post->status == 'published' ? 'globe' : 'box-archive' }} fs-5 me-1"></i>
                                        {{ Str::upper($post->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if ($post->status === 'published')
                                        <span
                                            class="fw-bold bg-success-subtle text-success fs-6 text-decoration-underline border border-success-subtle">
                                            <i class="bi bi-check-circle me-1"></i>
                                            {{ $post->published_at->format('d M Y') }}
                                        </span>
                                    @elseif ($post->status === 'archived')
                                        <span
                                            class="fw-bold bg-warning-subtle text-primary fs-6 text-decoration-underline  border border-warning-subtle">
                                            <i class="bi bi-file-earmark me-1"></i>
                                            Archived
                                        </span>
                                    @else
                                        <span
                                            class="fw-bold bg-warning-subtle text-primary fs-6 text-decoration-underline  border border-warning-subtle">
                                            <i class="bi bi-file-earmark me-1"></i>
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">

                                        {{-- Trigger --}}
                                        <button type="button" class="btn btn-sm btn-light border px-3"
                                            data-bs-toggle="dropdown" data-bs-boundary="viewport" aria-expanded="false">
                                            <i class="fa fa-ellipsis-vertical me-1"></i> Actions
                                            <i class="fa fa-chevron-down ms-1" style="font-size:10px;"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-0"
                                            style="min-width: 180px; border-radius: 10px; overflow: hidden;">

                                            {{-- Header --}}
                                            <li class="px-3 py-2 border-bottom">
                                                <small class="text-uppercase text-muted fw-semibold"
                                                    style="font-size:10px; letter-spacing:0.08em;">
                                                    Actions
                                                </small>
                                            </li>

                                            {{-- View --}}
                                            <li>
                                                <x-admin.anchor plain route="admin.post.show" :id="$post->id"
                                                    icon="eye" class="dropdown-item rounded-0 py-2">
                                                    View Post
                                                </x-admin.anchor>
                                            </li>

                                            {{-- Edit --}}
                                            <li>
                                                <x-admin.anchor plain route="admin.post.edit" :id="$post->id"
                                                    icon="pen" class="dropdown-item rounded-0 py-2 text-primary">
                                                    Edit Post
                                                </x-admin.anchor>
                                            </li>

                                            @if ($post->status === 'draft' || $post->status === 'archived')
                                                {{-- Publish --}}
                                                <li>
                                                    <x-admin.form route="admin.post.publish" :id="$post->id"
                                                        method="PUT">
                                                        <x-admin.button plain icon="globe"
                                                            class="dropdown-item rounded-0 py-2 text-success w-100 text-start">
                                                            Publish
                                                        </x-admin.button>
                                                    </x-admin.form>
                                                </li>
                                            @endif


                                            @if ($post->status === 'draft' || $post->status === 'published')
                                                {{-- Archive --}}
                                                <li>
                                                    <x-admin.form route="admin.post.archived" :id="$post->id"
                                                        method="PUT">
                                                        <x-admin.button plain icon="box-archive"
                                                            class="dropdown-item rounded-0 py-2 text-secondary w-100 text-start">
                                                            Archive
                                                        </x-admin.button>
                                                    </x-admin.form>
                                                </li>
                                            @endif


                                            {{-- Divider --}}
                                            <li>
                                                <hr class="dropdown-divider my-1">
                                            </li>

                                            {{-- Delete --}}
                                            <li>
                                                <x-admin.form route="admin.post.destroy" :id="$post->id" method="DELETE">
                                                    <x-admin.button plain message="Are You Sure?" icon="trash"
                                                        class="dropdown-item rounded-0 py-2 text-danger w-100 text-start">
                                                        Delete Post
                                                    </x-admin.button>
                                                    </form>
                                                </x-admin.form>
                                            </li>

                                        </ul>
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
