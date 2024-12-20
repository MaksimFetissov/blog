@extends('partials.layout')
@section('title', 'Tags')
@section('content')
    <a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
    <div class="my-4 text-center">
        {{ $tags->links() }}
    </div>

    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th class="text-right">Actions</th>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td class="text-right">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('tags.edit', $tag) }}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-error">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-4 text-center">
        {{ $tags->links() }}
    </div>
@endsection
