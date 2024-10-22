@extends('layouts.main')
@section('content')
    <div class="">
        posts

        <div>
            <div class="">
                {{$post->id}}.
                {{$post->title}}
            </div>
            <div class="">
                {{$post->content}}.
                {{$post->image}}
            </div>

        </div>

        <a href="{{route('post.index')}}">Back</a>
        <a href="{{route('post.edit', $post->id)}}">Edit</a>

        <form action="{{route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-dark" type="submit">Delete</button>
        </form>
    </div>

@endsection
