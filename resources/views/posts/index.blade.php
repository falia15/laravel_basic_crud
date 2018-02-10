@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="{{ url('/storage/cover_images/' . $post->cover_image) }}" alt="image">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h2><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h2>
                        <small>Writton in {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif
@endsection