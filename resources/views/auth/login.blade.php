@extends('layouts.app')

@section('content')
<div class="container">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
          <div class="app-brand justify-content-center">
            <!-- Logo SVG mu di sini -->
            <span class="app-brand-text demo text-body fw-bolder">LOGIN</span>
          </div>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
              <label for="email">Email</label>
              <input id="email" type="email"
                     class="form-control @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}" required autofocus>
              @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input id="password" type="password"
                     class="form-control @error('password') is-invalid @enderror"
                     name="password" required>
              @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
            </div>
          </form>

          

        </div>
      </div>
    </div>
  </div>
</div>


@endsection
