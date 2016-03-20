<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PostsAdminController extends Controller
{
    /**
     * @var Post
     */

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(4);

        return view('admin.posts.index', compact('posts'));
    }

    public function cadastro()
    {
        return view('admin.posts.cadastro');
    }

    public function store(PostRequest $request)
    {
        $post = $this->post->create($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function editar($id)
    {
        $post = $this->post->find($id);

        return view('admin.posts.editar', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $this->post->find($id)->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return redirect()->back();
    }

}
