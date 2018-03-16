<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::all();

        return view('posts.index')
            ->with('posts', $posts);
    }
    public function create()
    {
        $tags = Tag::all();
        return view('posts.create')
            ->with('tags', $tags);
    }
    public function store()
    {
        $post = new Post;
        $post->title       = Input::get('title');
        $post->text1      = Input::get('text1');
        $post->text2 = Input::get('text2');
        $post->quote = Input::get('quote');
        $post->fb_page = Input::get('fb_page');
        $post->save();

        Session::flash('message', '¡Post creado con éxito!');
        return Redirect::to('posts');
	}
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        return view('posts.create',
            ['post' => $post,
            'tags' => $tags]);
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',
            ['post' => $post]);
    }
}
