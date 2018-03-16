@extends('layouts.admin')
@section('content')
    <div class="jumbotron text-center">
        <h2>{{ $post->title }}</h2>
    </div>
    @foreach($post->tags as $tag)
    	<span class="tag">{{ $tag->name }}</span>
    @endforeach
</div>
@endsection