@extends('partials.layout')
@section('title', __('Reset Password'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{ __('Reset Password') }}</h2>
            <form action="{{ route('password.store') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Email') }}</span>
                    </div>
                    <input name="email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $request->email) }}"
                        class="input input-bordered @error('email') input-error @enderror" required autofocus autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </div>
                    <input name="password" type="password" placeholder="{{ __('Password') }}"
                        class="input input-bordered @error('password') input-error @enderror" required autocomplete="new-password" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Confirm Password') }}</span>
                    </div>
                    <input name="password_confirmation" type="password" placeholder="{{ __('Confirm Password') }}"
                        class="input input-bordered @error('password_confirmation') input-error @enderror" required autocomplete="new-password" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Reset Password') }}">
                </div>
            </form>
        </div>
    </div>
@endsection
