@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>New post</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            @method('POST')
            
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" type="text" name="title" value="">
            </div>

            <div class="form-group">
                <label for="title">Content</label>
                <input class="form-control" id="content" name="content" value="">
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection