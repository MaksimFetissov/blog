@extends('partials.layout')
@section('title', __('Verify Email'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{ __('Verify Your Email Address') }}</h2>
            <p class="text-sm">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mt-4">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex justify-between items-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-primary">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
