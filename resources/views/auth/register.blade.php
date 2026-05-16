@extends('auth.layout')
@section('main')
    <!-- register -->
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- register -->
                    <!-- Form Register -->

                    <div class="card mx-auto" style="max-width:520px;">
                        <article class="card-body">
                            <header class="mb-4">
                                <h4 class="card-title">Sign up</h4>
                            </header>
                            <form method="POST" action="{{ route('register.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder=""
                                            autofocus value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> <!-- mb-3 end.// -->
                                    <div class="col mb-3">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder=""
                                            value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> <!-- mb-3 end.// -->
                                </div> <!-- row end.// -->
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="" name="email"
                                        value="{{ old('email') }}">
                                    <small class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- mb-3 end.// -->
                                <div class="mb-3">
                                    <div class="form-check form-check-inline"><input class="form-check-input" checked
                                            type="radio" name="gender" value="male" id="gender-m"><label
                                            class="form-check-label" for="gender-m"> Male </label></div>
                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                            name="gender" value="female" id="gender-f"><label class="form-check-label"
                                            for="gender-f"> Female </label></div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- mb-3 end.// -->
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control">
                                    </div> <!-- mb-3 end.// -->
                                    <div class="mb-3 col-md-6">
                                        <label>Country</label>
                                        <select id="inputState" name="country" class="form-control">
                                            <option> Choose...</option>
                                            <option>Uzbekistan</option>
                                            <option>Russia</option>
                                            <option selected="">United States</option>
                                            <option>India</option>
                                            <option>Afganistan</option>
                                        </select>
                                    </div> <!-- mb-3 end.// -->
                                </div> <!-- row.// -->
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label>Create password</label>
                                        <input class="form-control" name="password" type="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> <!-- mb-3 end.// -->
                                    <div class="mb-3 col-md-6">
                                        <label>Repeat password</label>
                                        <input class="form-control" name="password_confirmation" type="password">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> <!-- mb-3 end.// -->
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark w-100"> Register </button>
                                </div> <!-- mb-3// -->
                            </form>
                        </article><!-- card-body.// -->
                    </div>
                    <!-- end register -->

                    <p class="text-center mt-4">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>

                </div>
            </div>
        </div>
    </section>
    <!-- end register -->
@endsection
