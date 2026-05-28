@extends('admin.layout')
@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Category" shortDescription="All Category" route="admin.category.create" type="primary"
        message="Create Category" icon="plus" />


    <div class="card radius-15">
        <div class="card-body mx-5">
            <div class="table-responsive ">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->slug }}</td>
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

                                            {{-- Edit --}}
                                            <li>
                                                <x-admin.anchor plain route="admin.category.edit" :id="$category->id"
                                                    icon="pen" class="dropdown-item rounded-0 py-2 text-primary">
                                                    Edit
                                                </x-admin.anchor>
                                            </li>

                                            {{-- Divider --}}
                                            <li>
                                                <hr class="dropdown-divider my-1">
                                            </li>

                                            {{-- Delete --}}
                                            <li>
                                                <x-admin.form route="admin.category.destroy" :id="$category->id"
                                                    method="DELETE">
                                                    <x-admin.button plain message="Are You Sure?" icon="trash"
                                                        class="dropdown-item rounded-0 py-2 text-danger w-100 text-start">
                                                        Delete
                                                    </x-admin.button>
                                                </x-admin.form>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-danger mt-5 fs-4 ">No categories found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
