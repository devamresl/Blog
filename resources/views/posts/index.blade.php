@extends('layouts.app')

@section('content')
    <div class="clearfix">
        <a href="{{ route('posts.create') }}" class="btn btn-success float-right" style="margin-bottom: 10px">Add Post</a>
    </div>
    <div class="card card-default">
        <div class="card-header">All Posts</div>
            @if ($posts->count() > 0)
                <table class="card-body">
                    <table class="table">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="" width="100px" height="100px">
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                            <form class="float-right" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm ml-2">{{ $post->trashed() ? 'Delete' : 'Trashed' }}</button>
                                            </form>
                                        @if (!$post->trashed())
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm float-right">Edit</a>
                                        @else
                                            <a href="{{ route('trashed.restore', $post->id) }}" class="btn btn-primary btn-sm float-right">Restore</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @else
                <div class="card-body">
                    <h1 class="text-center">
                        No Posts Yet.
                    </h1>
                </div>
            @endif
        </div>
    </div>
@endsection

