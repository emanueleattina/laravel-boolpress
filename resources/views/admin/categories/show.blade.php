@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('admin.categories.index') }}">Back</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $category['name'] }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection