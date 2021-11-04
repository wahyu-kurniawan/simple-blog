@extends('layouts.main')

@section('body')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form method="POST" action="/register">
                @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Make Account</h1>

              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="username" name="username" value="{{ old('username') }}">
                <label for="name">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom mb-2" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>

          </main>
          <small class="d-block text-center">Already have account? <a href="/login">login now</a></small>

    </div>
</div>
@endsection