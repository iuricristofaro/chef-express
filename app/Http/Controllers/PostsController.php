<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = \App\Post::all();

        $posts = $this->post->paginate(4);

        return view('blog.index', compact('posts'));
    }

    public function paginas($id)
    {
        $post = $this->post->find($id);

        return view('blog.paginas', compact('post'));
    }
}
