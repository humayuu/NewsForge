@extends('admin.layout')

@section('main')
    {{-- Breadcrumb --}}
    <x-admin.breadcrumb title="Create User" shortDescription="Add a new author or admin." route="admin.user.index"
        icon="arrow-left me-1" message="Back to Users" />

    <x-admin.form route="admin.user.store" method="POST" encType="multipart/form-data">
        <div class="row g-4">

            <!-- LEFT PORTION -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="fw-bold mb-1">User Details</h5>
                            <p class="text-muted small mb-0">Add user fullname, email, password and gender.</p>
                        </div>

                        <!-- First Name -->
                        <div class="mb-4">
                            <label for="first_name" class="form-label fw-semibold">
                                First Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control rounded-3 @error('first_name') is-invalid @enderror"
                                id="first_name" name="first_name" value="{{ old('first_name') }}"
                                placeholder="Enter first name" autofocus>
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="mb-4">
                            <label for="last_name" class="form-label fw-semibold">
                                Last Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control rounded-3 @error('last_name') is-invalid @enderror"
                                id="last_name" name="last_name" value="{{ old('last_name') }}"
                                placeholder="Enter last name">
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">
                                Password <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control rounded-3 @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Enter password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Confirmation -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">
                                Confirm Password <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control rounded-3" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm password">
                        </div>

                        <!-- Gender -->
                        <div class="mb-4">
                            <label for="gender" class="form-label fw-semibold">
                                Gender <span class="text-danger">*</span>
                            </label>
                            <select class="form-select select2 @error('gender') is-invalid @enderror" id="gender"
                                name="gender">
                                <option selected disabled value="">Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT PORTION -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="fw-bold mb-1">Avatar & Other Details</h5>
                            <p class="text-muted small mb-0">Add avatar, country, city, role and status.</p>
                        </div>

                        <!-- Avatar -->
                        <div class="mb-4">
                            <label for="profile_photo_path" class="form-label fw-semibold">Avatar</label>
                            <input type="file"
                                class="form-control rounded-3 @error('profile_photo_path') is-invalid @enderror"
                                id="profile_photo_path" name="profile_photo_path">
                            <small class="text-muted">Recommended size: 52×52px</small>
                            @error('profile_photo_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Country -->
                        <div class="mb-4">
                            <label for="country" class="form-label fw-semibold">Country</label>
                            <input type="text" class="form-control rounded-3 @error('country') is-invalid @enderror"
                                id="country" name="country" value="{{ old('country') }}" placeholder="Enter country">
                            @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- City -->
                        <div class="mb-4">
                            <label for="city" class="form-label fw-semibold">City</label>
                            <input type="text" class="form-control rounded-3 @error('city') is-invalid @enderror"
                                id="city" name="city" value="{{ old('city') }}" placeholder="Enter city">
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="form-label fw-semibold">
                                Role <span class="text-danger">*</span>
                            </label>
                            <select class="form-select select2 @error('role') is-invalid @enderror" id="role"
                                name="role">
                                <option selected disabled value="">Select Role</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="author" {{ old('role') == 'author' ? 'selected' : '' }}>Author</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold d-block mb-2">Status</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status_active"
                                        value="active" {{ old('status', 'active') == 'active' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status_inactive"
                                        value="inactive" {{ old('status') == 'inactive' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_inactive">Inactive</label>
                                </div>
                            </div>
                            @error('status')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <button type="submit" class="btn btn-primary px-4 rounded-3">
                                <i class="fa fa-plus-circle me-1"></i> Create User
                            </button>
                            <a href="{{ route('admin.user.index') }}" class="btn btn-light border px-4 rounded-3">
                                Cancel
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </x-admin.form>
@endsection
