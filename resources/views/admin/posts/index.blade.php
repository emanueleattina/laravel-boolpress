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
                <div>Category: {{ $post->category->name }}</div>
                <div class="card-body">
                    {{ $post->content }}
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-info" href="{{ route('admin.posts.show', ['post' => $post->id]) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Edit</a>
                        {{-- <a class="btn btn-danger" onclick="event.preventDefault(); this.nextElementSibling.submit();">
                            Delete
                        </a> --}}
                        {{-- <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form> --}}
                        <a class="btn btn-danger" @click="deletePost({{$post->id}})">Delete</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="delete-popup" v-if="deleteThis == true">
        {{-- <div class="delete-popup" > --}}
            <div class="sure">
                <h1>Sure?</h1>
                <div class="buttons">
                    <button class="btn btn-success mr-2" @click="deleteConfirm">yes</button>
                    <button class="btn btn-danger ml-2" @click="deleteThis = false">no</button>
                    {{-- <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-success ml-2" type="submit" value="yes">
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection