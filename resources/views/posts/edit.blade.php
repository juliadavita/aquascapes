@extends('layouts.app')
@section('content')

    <h1>Edit post</h1>
    <hr/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="fish" class="form-control mb-3" placeholder="Post Name" value="{{ $post->fish }}"/>

        <textarea class="form-control mb-3" name="description" rows="4" placeholder="Description">{{ $post->description }}</textarea>

        <input type="file" name="content_image" class="form-control" placeholder="content_image">
        <img src="/content_image/{{ $post->content_image }}" width="200px">

        <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
    </form>

@endsection
