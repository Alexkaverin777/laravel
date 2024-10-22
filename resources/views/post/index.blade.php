@extends('layouts.main')
@section('content')
    <div class="">
        posts

        <div>
            <div class="">
                <a class="btn btn-primary" href="{{route('post.create')}}">Post create</a>
            </div>


            @foreach($posts as $post)
                <div class="">
                    <a href="{{route('post.show', $post->id)}}">
                        {{$post->id}}.
                        {{$post->title}}
                    </a>

                </div>

            @endforeach
        </div>
    </div>

@endsection
