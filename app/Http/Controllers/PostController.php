<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
    public function store(Request $request)
    {
        $this->savePost(new Post, $request);
        Session::flash('message', '¡Post creado con éxito!');
        return Redirect::to('posts');
	}
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        return view('posts.edit',
            ['post' => $post,
            'tags' => $tags]);
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',
            ['post' => $post]);
    }
    public function update($id, Request $request)
    {
        $rules = array();
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $post = Post::find($id);
            $this->savePost($post, $request);
            // redirect
            Session::flash('message', 'Guardado con éxito!');
            return Redirect::to('posts');
        }
    }
    private function savePost($post, $request){
        $post->title       = Input::get('title');
        $post->text1      = Input::get('text1');
        $post->text2 = Input::get('text2');
        $post->quote = Input::get('quote');
        $post->fb_page = Input::get('fb_page');

        $file = $request->file("image");
        if ($file){
            $name = $post->id . "." . $file->extension();
            $folder = "postimages";
            $path = $file->storePubliclyAs('public/'.$folder, $name); 
            $post->image = $folder.'/'.$name;
        }

        $post->save();
    }
}
