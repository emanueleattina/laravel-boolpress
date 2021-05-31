@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    </div>
    <div class="row justify-content-left">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">Category: {{ $post->category->name }}</div>
                <div class="card-body">
                    {{ $post->content }}
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-info" href="{{ route('posts.show', ['slug' => $post->slug]) }}">Show</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection