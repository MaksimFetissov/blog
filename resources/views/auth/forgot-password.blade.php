@extends('partials.layout')
@section('title', __('Forgot Password'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{ __('Forgot Password') }}</h2>
            <p class="text-sm">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Email') }}</span>
                    </div>
                    <input name="email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}"
                        class="input input-bordered @error('email') input-error @enderror" required autofocus />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Email Password Reset Link') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
