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
                                <td class="d-flex gap-2">
                                    <x-admin.anchor route="admin.category.edit" :id="$category->id" size="sm"
                                        icon="pen" />
                                    <x-admin.form route="admin.category.destroy" :id="$category->id" method="DELETE">
                                        <x-admin.button size="sm" type="danger" message="Are you Sure?"
                                            icon="trash" />
                                    </x-admin.form>
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
