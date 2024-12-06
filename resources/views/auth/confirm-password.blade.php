@extends('partials.layout')
@section('title', __('Confirm Password'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{ __('Confirm Password') }}</h2>
            <p class="text-sm">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
            <form action="{{ route('password.confirm') }}" method="POST">
                @csrf
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </div>
                    <input name="password" type="password" placeholder="{{ __('Password') }}"
                        class="input input-bordered @error('password') input-error @enderror" required autocomplete="current-password" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Confirm') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
