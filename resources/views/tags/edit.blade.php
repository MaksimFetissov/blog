@extends('partials.layout')
@section('title', 'Edit Tag')
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">Edit Tag</h2>
            <form action="{{ route('tags.update', $tag) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Tag Name</span>
                    </div>
                    <input name="name" type="text" value="{{ old('name') ?? $tag->name }}" placeholder="Tag Name"
                        class="input input-bordered @error('name') input-error @enderror" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
@endsection
