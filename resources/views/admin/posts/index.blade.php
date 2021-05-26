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
                        {{-- <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="" value="Delete" style="background: none; border: none; color: #3490dc; padding: 0;">
                        </form> --}}
                        <button class="delete-this" @click="deleteComic">Delete</button>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="delete-popup" v-if="deleteThis == true">
            <div class="sure">
                <h1>Sure?</h1>
                <div class="buttons">
                    <form action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="" value="yes">
                    </form>
                    <button @click="deleteThis = false" style="border: none;">no</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection