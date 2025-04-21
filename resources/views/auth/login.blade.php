@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px; margin-top: 50px; background-color: #1a1a2e; border-radius: 15px; padding: 30px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);">
    <h1 class="text-center mb-4" style="font-size: 36px; font-weight: bold; color: #e94560; text-shadow: 0 0 10px #e94560;">Log In</h1>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label" style="font-size: 16px; color: #c4c4c4;">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #0f3460; color: #fff; border: none;">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label" style="font-size: 16px; color: #c4c4c4;">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background-color: #0f3460; color: #fff; border: none;">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="background-color: #1a1a2e; border-color: #e94560;">
                <label class="form-check-label" for="remember" style="color: #c4c4c4;">
                    Remember Me
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn" style="width: 100%; background: linear-gradient(90deg, #e94560, #0f3460); color: #fff; font-weight: bold; font-size: 16px;">Log In</button>
            
            <!-- Forgot Password -->
            @if (Route::has('password.request'))
            <a class="btn btn-link d-block text-center mt-3" href="{{ route('password.request') }}" style="color: #e94560;">
                Forgot Your Password?
            </a>
            @endif
        </form>

        <!-- Register Button -->
        <div class="text-center mt-4">
            <span style="color: #c4c4c4;">New to our site?</span>
            <a class="btn" href="{{ route('register') }}" style="margin-top: 10px; width: 100%; border: 2px solid #e94560; color: #e94560; font-weight: bold;">Register</a>
        </div>
    </div>
</div>

@endsection
