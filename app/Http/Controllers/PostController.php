<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }


//    public function create()
//    {
//        $postsArr = [
//            [
//                'title' => 'title',
//                'content' => 'content',
//                'image' => 'image',
//                'likes' => 100,
//                'liked' => 1,
//
//            ],
//            [
//                'title' => 'title2',
//                'content' => 'content2',
//                'image' => 'image2',
//                'likes' => 200,
//                'liked' => 1,
//
//            ]
//
//        ];
//
//        foreach ($postsArr as $posts) {
//            Post::create($posts);
//        }
////        Post::create([
////            'title' => 'title2',
////            'content' => 'content2',
////            'image' => 'image2',
////            'likes' => 200,
////            'liked' => 1,
////        ]);
//        dd('create');
//    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));

    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
            'likes' => 'string|required',
            'liked' => 'string|required',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);


        $post = Post::create($data);
//        foreach ($tags as $tag) {
//            PostTag::firstOrCreate([
//                'tag_id'=> $tag,
//                'post_id'=> $post->id,
//            ]);
//        }

        $post->tags()->attach($tags);


        return redirect()->route('post.index');
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)

    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
            'likes' => 'string|required',
            'liked' => 'string|required',
            'category_id' => '',
        ]);

        $post->update($data);
        return redirect()->route('post.show', $post->id);


    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
//        Post::find(2)->delete();


//        ВОСТАНОВИТЬ ДАННЫЕ
        Post::withTrashed()->whereIn('id', [2])->restore();
        dd('delete');
    }

//    firstOrCreate
//    updateOrCreate

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image',
            'likes' => 1000,
            'liked' => 1,
        ];

        $myPost = Post::firstOrCreate([
            'title' => 'some post',
        ], [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image',
            'likes' => 1000,
            'liked' => 1,
        ]);
        dump($myPost);
        dd('finished');
    }


    public function updateOrCreate()
    {


        $myPost = Post::updateOrCreate([
            'title' => 'title not',
        ], [
            'title' => 'update some post',
            'content' => 'update some content',
            'image' => 'update some image',
            'likes' => 10,
            'liked' => 1,
        ]);
        dump($myPost);
        dd('finished');
    }
}
