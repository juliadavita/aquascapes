@extends('layouts.app')

@section('content')


    <div class="bg-white text-dark rounded p-3">
        <h5 class="text-warning">Fish</h5>
        <p class="fw-bold">{{ $post->fish }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $post->description }}</p>

        <h5 class="text-warning">Image</h5>
        <img src="/content_image/{{ $post->content_image }}" width="500px">
    </div>

@endsection
