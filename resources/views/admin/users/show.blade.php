@extends('admin.layout')

@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="User Detail" route="admin.user.index" icon="arrow-left me-1" message="Back to Users" />

    {{-- User Detail Card --}}
    <div class="row g-4">

        {{-- Avatar Column --}}
        <div class="col-12 col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="card-title text-muted mb-3">User Avatar</h6>
                    @php
                        $avatar = $user->profile_photo_path
                            ? asset('storage/' . $user->profile_photo_path)
                            : asset('Default_avatar.png');
                    @endphp
                    <img src="{{ $avatar }}" alt="{{ $user->first_name }}" class="img-fluid rounded-circle"
                        style="width: 150px; height: 150px; object-fit: cover;">

                    <h5 class="mt-3 fw-bold">{{ $user->first_name }} {{ $user->last_name }}</h5>
                    <span class="badge bg-primary">{{ Str::ucfirst($user->role) }}</span>
                </div>
            </div>
        </div>

        {{-- Details Column --}}
        <div class="col-12 col-md-8">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-title text-muted mb-3">User Information</h6>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">First Name</span>
                            <span class="fw-bold">{{ $user->first_name }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Last Name</span>
                            <span class="fw-bold">{{ $user->last_name }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Email</span>
                            <span class="text-muted">{{ $user->email }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Gender</span>
                            <span class="badge bg-dark  fs-6">{{ Str::ucfirst($user->gender ?? 'N/A') }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Country</span>
                            <span class="text-muted">{{ $user->country ?? 'N/A' }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">City</span>
                            <span class="text-muted">{{ $user->city ?? 'N/A' }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Role</span>
                            <span class="badge bg-primary fs-6">{{ Str::ucfirst($user->role) }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-semibold text-secondary">Status</span>
                            @php
                                $statusClass = match (strtolower($user->status)) {
                                    'active' => 'bg-success',
                                    'inactive' => 'bg-danger',
                                    default => 'bg-secondary',
                                };
                            @endphp
                            <span class="badge {{ $statusClass }} fs-6">
                                {{ Str::upper($user->status) }}
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span class="fw-semibold text-secondary">Joined At</span>
                            <span class="badge bg-dark fs-6">
                                {{ $user->created_at->format('d M Y') }}
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
