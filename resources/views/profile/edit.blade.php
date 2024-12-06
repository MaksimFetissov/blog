@extends('partials.layout')
@section('title', __('Profile'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{ __('Profile') }}</h2>


            <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
                @csrf
                @method('patch')


                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Name') }}</span>
                    </div>
                    <input name="name" type="text" value="{{ old('name', $user->name) }}" placeholder="Name"
                        class="input input-bordered @error('name') input-error @enderror" required autofocus autocomplete="name" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>


                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Email') }}</span>
                    </div>
                    <input name="email" type="email" value="{{ old('email', $user->email) }}" placeholder="Email"
                        class="input input-bordered @error('email') input-error @enderror" required autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>


                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
                </div>
            </form>


            <form method="POST" action="{{ route('password.update') }}" class="space-y-4 mt-6">
                @csrf
                @method('put')


                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Current Password') }}</span>
                    </div>
                    <input name="current_password" type="password" placeholder="Current Password"
                        class="input input-bordered @error('current_password') input-error @enderror" required autocomplete="current-password" />
                    <div class="label">
                        @error('current_password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>


                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('New Password') }}</span>
                    </div>
                    <input name="password" type="password" placeholder="New Password"
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
                    <input name="password_confirmation" type="password" placeholder="Confirm Password"
                        class="input input-bordered @error('password_confirmation') input-error @enderror" required autocomplete="new-password" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>


                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
                </div>
            </form>


            <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-4 mt-6">
                @csrf
                @method('delete')

                <h3 class="text-lg font-medium">{{ __('Delete Account') }}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>


                <label class="form-control">
                    <div class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </div>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered @error('password') input-error @enderror" required />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

               
                <div class="flex justify-end space-x-2">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                    <x-danger-button>
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>
        </div>
    </div>
@endsection
