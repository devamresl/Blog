@extends('layouts.app')

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($post) ? "Update Post" : "Add New Post" }}
        </div>
        <div class="card-body">
            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="post title">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Add A New Post" value="{{ isset($post) ? $post->title : "" }}">
                </div>
                <div class="form-group">
                    <label for="post description">Description:</label>
                    <textarea class="form-control" name="description" rows="2" placeholder="Add A Description">{{ isset($post) ? $post->description : "" }}</textarea>
                </div>
                <div class="form-group">
                    <label for="post content">Content:</label>
                    {{-- <textarea class="form-control" name="content" rows="3" placeholder="Add A Content"></textarea> --}}
                    <input id="x" type="hidden" name="content" value="{{ isset($post) ? $post->content : "" }}">
                    <trix-editor input="x"></trix-editor>
                </div>
                @if (isset($post))
                    <div class="form-group">
                        <img src="{{ asset('storage/' . $post->image) }}" style="width: 100%">
                    </div>
                @endif
                <div class="form-group">
                    <label for="post image">Image:</label>
                    <input type="file" class="form-control" name="image" value="{{ isset($post) ? $post->image : "" }}">
                </div>
                <div class="form-group">
                    <label for="selectCategory">Select A Category</label>
                    <select class="form-control" name="categoryID" id="selectCategory">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if (!$tags->count() <= 0 && isset($post))
                    <div class="form-group">
                        <label for="selectTag">Select A Tag</label>
                        <select class="form-control tags" name="tags[]" id="selectTag" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" @if ($post->hasTag($tag->id))
                                    selected
                                @endif>
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($post) ? "Update" : "Add" }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tags').select2();
        });
    </script>
@endsection

