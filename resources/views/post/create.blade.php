@extends('layouts.main')
@section('content')
    <form class="" action="{{route('post.store')}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input value="{{old('title')}}" type="text" name="title" class="form-control" placeholder="title" aria-label="title"
                   aria-describedby="basic-addon1">
            @error('title')
            <p class="text-danger" style="width: 100%;">
                {{$message}}
            </p>
            @enderror
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input value="{{old('content')}}" type="text" name="content" class="form-control" placeholder="content" aria-label="content"
                   aria-describedby="basic-addon1">
            @error('content')
            <p class="text-danger" style="width: 100%;">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input  value="{{old('image')}}" type="text" name="image" class="form-control" placeholder="image" aria-label="image"
                   aria-describedby="basic-addon1">
            @error('image')
            <p class="text-danger" style="width: 100%;">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input value="{{old('likes')}}" type="text" name="likes" class="form-control" placeholder="likes" aria-label="likes"
                   aria-describedby="basic-addon1">
            @error('likes')
            <p class="text-danger" style="width: 100%;">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input value="{{old('liked')}}" type="text" name="liked" class="form-control" placeholder="liked" aria-label="liked"
                   aria-describedby="basic-addon1">
            @error('liked')
            <p class="text-danger" style="width: 100%;">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="input-group mb-3">
            <select name="category_id" class="form-select form-select-lg mb-3" aria-label="Small select example">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->title}}
                    </option>

                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <select name="tags[]" class="form-select" multiple aria-label="Tags">

                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">
                        {{$tag->title}}
                    </option>
                @endforeach


            </select>
        </div>
        <button class="btn btn-primary" type="submit">send</button>
    </form>

@endsection
