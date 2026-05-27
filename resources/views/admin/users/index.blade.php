@extends('admin.layout')
@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Users" shortDescription="All Authors & Admin users" route="admin.user.create" icon="plus"
        message="Create User" />

    <div class="card radius-15">
        <div class="card-body mx-5">
            <div class="table-responsive" style="overflow: unset">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>

                                {{-- Avatar --}}
                                <td>
                                    @php
                                        $avatar = $user->profile_photo_path
                                            ? asset('storage/' . $user->profile_photo_path)
                                            : asset('Default_avatar.png');
                                    @endphp
                                    <img src="{{ $avatar }}" width="60" height="45"
                                        style="object-fit:cover; border-radius:6px;">
                                </td>

                                {{-- Fullname --}}
                                <td>{{ $user->full_name ?? 'Unknown' }}</td>

                                {{-- Email --}}
                                <td>{{ $user->email ?? 'N/A' }}</td>

                                {{-- Gender --}}
                                <td>{{ $user->gender ?? 'N/A' }}</td>

                                {{-- Role --}}
                                <td>
                                    <span class="badge bg-primary fs-6">{{ $user->role ?? 'N/A' }}</span>
                                </td>

                                {{-- Status --}}
                                <td>
                                    <span class="badge bg-{{ $user->status == 'active' ? 'success' : 'secondary' }}">
                                        <i
                                            class="fa fa-{{ $user->status == 'active' ? 'circle-check' : 'ban' }} fs-5 me-1"></i>
                                        {{ Str::upper($user->status ?? 'inactive') }}
                                    </span>
                                </td>

                                {{-- Actions --}}
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
                                                <x-admin.anchor plain route="admin.user.show" :id="$user->id"
                                                    icon="eye" class="dropdown-item rounded-0 py-2">
                                                    View User
                                                </x-admin.anchor>
                                            </li>

                                            {{-- Edit --}}
                                            <li>
                                                <x-admin.anchor plain route="admin.user.edit" :id="$user->id"
                                                    icon="pen" class="dropdown-item rounded-0 py-2 text-primary">
                                                    Edit User
                                                </x-admin.anchor>
                                            </li>

                                            {{-- status Button --}}
                                            <li>
                                                @php
                                                    $statusBtn = $user->status === 'active' ? 'inactive' : 'active';
                                                    $statusIcon = $user->status === 'active' ? 'ban' : 'check-circle';
                                                @endphp
                                                <x-admin.form route="admin.user.status" :id="$user->id" method="PUT">
                                                    <x-admin.button plain :icon="$statusIcon"
                                                        class="dropdown-item rounded-0 py-2 text-{{ $user->status === 'inactive' ? 'primary' : 'secondary' }} w-100 text-start">
                                                        {{ Str::title($statusBtn) }}
                                                    </x-admin.button>
                                                </x-admin.form>
                                            </li>

                                            {{-- Divider --}}
                                            <li>
                                                <hr class="dropdown-divider my-1">
                                            </li>

                                            {{-- Delete --}}
                                            <li>
                                                <x-admin.form route="admin.user.destroy" :id="$user->id" method="DELETE">
                                                    <x-admin.button plain message="Are You Sure?" icon="trash"
                                                        class="dropdown-item rounded-0 py-2 text-danger w-100 text-start">
                                                        Delete User
                                                    </x-admin.button>
                                                </x-admin.form>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger mt-5 fs-4">No User found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
