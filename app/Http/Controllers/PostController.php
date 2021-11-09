<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create_post');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->save();

        event(new PostCreated($post));

        return redirect()->back();
    }

    public function showPosts()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            echo $post->id . '- ' . $post->title;
            echo '<br>';
        }
    }
}
