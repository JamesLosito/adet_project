@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 500px; margin-top: 50px; background-color: #1a1a2e; border-radius: 15px; padding: 30px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);">
    <h1 class="text-center mb-4" style="font-size: 36px; font-weight: bold; color: #e94560; text-shadow: 0 0 10px #e94560;">Sign Up</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="d-flex gap-3 w-100">
            <!-- First Name -->
            <div class="mb-3 w-100">
                <label for="first_name" class="form-label" style="font-size: 16px; color: #c4c4c4;">Username</label>
                <input id="first_name" type="text" class="form-control" name="first_name" required placeholder="Enter your first name" style="background-color: #0f3460; color: #fff; border: none;">
            </div>

            <!-- Last Name -->
            <div class="mb-3 w-100">
                <label for="last_name" class="form-label" style="font-size: 16px; color: #c4c4c4;">Full Name</label>
                <input id="last_name" type="text" class="form-control" name="last_name" required placeholder="Enter your last name" style="background-color: #0f3460; color: #fff; border: none;">
            </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label" style="font-size: 16px; color: #c4c4c4;">Email</label>
            <input id="email" type="email" class="form-control" name="email" required placeholder="Enter your email" style="background-color: #0f3460; color: #fff; border: none;">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label" style="font-size: 16px; color: #c4c4c4;">Password</label>
            <input id="password" type="password" class="form-control" name="password" required placeholder="Enter a strong password" style="background-color: #0f3460; color: #fff; border: none;">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label" style="font-size: 16px; color: #c4c4c4;">Confirm Password</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm your password" style="background-color: #0f3460; color: #fff; border: none;">
        </div>

        <!-- Favorite Game -->
        <div class="mb-3">
            <label for="favorite_game" class="form-label" style="font-size: 16px; color: #c4c4c4;">Favorite Game</label>
            <input id="favorite_game" type="text" class="form-control" name="favorite_game" placeholder="What's your favorite game?" style="background-color: #0f3460; color: #fff; border: none;">
        </div>

        <!-- Gaming Level -->
        <div class="mb-3">
            <label for="gaming_level" class="form-label" style="font-size: 16px; color: #c4c4c4;">Gaming Level</label>
            <select id="gaming_level" class="form-control" name="gaming_level" style="background-color: #0f3460; color: #fff; border: none;">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="pro">Pro</option>
            </select>
        </div>

        <!-- Terms and Conditions -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="terms" style="color: #c4c4c4;">I agree to the <a href="#" style="color: #e94560;">Terms and Conditions</a>.</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn" style="width: 100%; background: linear-gradient(90deg, #e94560, #0f3460); color: #fff; font-weight: bold; font-size: 16px;">Sign Up</button>
        <a href="{{ route('login') }}" class="btn" style="width: 100%; border: 2px solid #e94560; color: #e94560; font-weight: bold;">Sign Up</a>

        <!-- Divider -->
        <div class="text-center py-3">
            <hr class="flex-grow-1 m-0" style="border-top: 1px solid #c4c4c4;">
            <span style="font-size: 14px; color: #c4c4c4; padding: 0 10px;">OR</span>
            <hr class="flex-grow-1 m-0" style="border-top: 1px solid #c4c4c4;">
        </div>

        <!-- Log in Link -->
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn" style="width: 100%; border: 2px solid #e94560; color: #e94560; font-weight: bold;">Log In</a>
        </div>
    </form>
</div>
@endsection
