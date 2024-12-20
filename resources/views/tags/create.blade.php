@extends('partials.layout')
@section('title', 'New Tag')
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">Create Tag</h2>
            <form action="{{ route('tags.store') }}" method="POST">
                @csrf
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Tag Name</span>
                    </div>
                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Tag Name"
                        class="input input-bordered @error('name') input-error @enderror" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
    </div>
@endsection
