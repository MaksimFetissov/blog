@extends('partials.layout')
@section('title', 'Edit Post')
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">Edit post</h2>
            <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="form-control  ">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                    <input name="title" type="text" placeholder="Title" value="{{ old('title') ?? $post->title }}"
                        class="input input-bordered @error('title') input-error @enderror" />
                    <div class="label">
                        @error('title')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Content</span>
                    </div>
                    <textarea name="body" rows="12" class="textarea textarea-bordered @error('body') textarea-error @enderror"
                        placeholder="Write here">{{ old('body') ?? $post->body }}</textarea>
                    <div class="label">
                        @error('body')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Image</span>
                    </div>
                    <input name="image" type="file" accept="image/*"
                        class="w-full file-input file-input-bordered @error('image') file-input-error @enderror" />
                    <div class="label">
                        @error('image')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="w-full max-w-xs form-control">
                    <div class="label">
                      <span class="label-text">Tags</span>
                    </div>
                    <select name="tags[]" size="{{$tags->count()}}" multiple class="select select-bordered @error('tags.*') select-error @enderror">
                        @foreach($tags as $tag)
                            <option @if($post->tags->pluck('id')->contains($tag->id)) selected @endif value="{{ $tag->id }}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    <div class="label">
                        @error('tags.*')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                  </label>
                <input type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
@endsection
