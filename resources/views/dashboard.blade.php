@extends('partials.layout')
@section('title', __('Dashboard'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title text-xl font-semibold">
                {{ __('Dashboard') }}
            </h2>
            <p>
                {{ __("You're logged in!") }}
            </p>

            <div class="mt-6 flex justify-between">
                <div class="flex space-x-2">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        {{ __('Go to Home') }}
                    </a>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                        {{ __('Go to Profile') }}
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-primary ml-auto">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>


        </div>
    </div>
@endsection
