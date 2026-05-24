@extends('admin.layout')
@section('main')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3 fs-3">Category</div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create Category</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card radius-15">
        <div class="card-body mx-5">
            <div class="table-responsive ">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <x-admin.anchor route="admin.category.edit" :id="$category->id" size="sm"
                                        icon="pen" />
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <x-admin.button size="sm" type="danger" message="Are you Sure?"
                                            icon="trash" />
                                    </form>
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
