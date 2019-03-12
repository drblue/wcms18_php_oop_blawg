@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>{{ $country->name }}</h1>

        @if(count($posts) > 0)
            <div>
                <h2>Posts</h2>
                @foreach($posts as $post)
                    <h3>{{ $post->title }}</h3>
                    <h4>Posted by {{ $post->user->name }}</h4>
                    <p>{{ $post->content }}</p>
                    <hr>
                @endforeach
            </div>
        @else
            <p><em>Sorry, not posts yet from users in {{ $country->name }}.</em></p>
        @endif
    </div>
@endsection
