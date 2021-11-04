@extends('layouts.main')

@section('body')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginFailed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginFailed') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <form method="POST" action="/login">
                    @csrf
                  <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
              
                  {{-- <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div> --}}
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center">Don't have account?<a href="/register">create account</a></small>
              </main>
        </div>
    </div>
@endsection