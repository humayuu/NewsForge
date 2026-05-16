@extends('auth.layout')
@section('main')
    <!-- login -->
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sign in</h4>
                            <form method="POST" action="{{ route('login.store') }}">
                                @csrf
                                <a href="#" class="btn btn-danger w-100 mb-4"> <i class="fa fa-google"></i>
                                    &nbsp; Sign in with
                                    Google</a>
                                <div class="mb-3">
                                    <input class="form-control" placeholder="Email" type="email" name="email" autofocus
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- mb-3// -->
                                <div class="mb-3">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> <!-- mb-3// -->

                                <div class="mb-3">
                                    <a href="#" class="float-end">Forgot password?</a>
                                    <div class="form-check"><input type="checkbox" class="form-check-input" checked
                                            id="remember"><label class="form-check-label" for="remember"> Remember
                                        </label></div>
                                </div> <!-- mb-3 form-check .// -->
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark w-100"> Login </button>
                                </div> <!-- mb-3// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end login -->
@endsection
