@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.posts.create')}}">Create</a>
        </div>
    </div>
    <div class="row justify-content-left">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                    {{ $post->content }}
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Edit</a>
                        <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">Show</a>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="" value="Delete" style="background: none; border: none; color: #3490dc; padding: 0;">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection