@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.index') }}" class="btn tbn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="{{ url('/storage/cover_images/'. $post->cover_image) }}" alt="image">
    <br><br>
    <p>{!!$post->body!!}</p>
    <hr>
    <small>Writton on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection