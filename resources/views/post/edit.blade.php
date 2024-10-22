@extends('layouts.main')
@section('content')
    <form class="" action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="title" class="form-control" placeholder="title" aria-label="title"
                   aria-describedby="basic-addon1" value="{{$post->title}}">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="content" class="form-control" placeholder="content" aria-label="content"
                   aria-describedby="basic-addon1" value="{{$post->content}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="image" class="form-control" placeholder="image" aria-label="image"
                   aria-describedby="basic-addon1" value="{{$post->image}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="likes" class="form-control" placeholder="likes" aria-label="likes"
                   aria-describedby="basic-addon1" value="{{$post->likes}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="liked" class="form-control" placeholder="liked" aria-label="liked"
                   aria-describedby="basic-addon1" value="{{$post->liked}}">
        </div>

        <div class="input-group mb-3">
            <select name="category_id" class="form-select form-select-lg mb-3" aria-label="Small select example">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $post->category->id ? 'selected ' : '' }}

                        value="{{$category->id}}">
                        {{$category->title}}
                    </option>

                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <select name="tags[]" class="form-select" multiple aria-label="Tags">

                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected ' : '' }}

                        @endforeach

                        value="{{$tag->id}}">
                        {{$tag->title}}
                    </option>
                @endforeach


            </select>
        </div>


        <button class="btn btn-primary" type="submit">update</button>
    </form>

@endsection
