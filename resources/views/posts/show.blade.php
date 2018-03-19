@extends('layouts.admin')
@section('content')
    <div class="jumbotron text-center">
        <h2>{{ $post->title }}</h2>
    </div>
	<p>
	{{ Form::label('title', 'Título') }}
	{{ $post->title }}
	</p>
	<p>
	{{ Form::label('text1', 'Texto 1') }}
    {{ $post->text1 }}
	</p>
	<p>
	{{ Form::label('text2', 'Texto 2') }}
    {{ $post->text2 }}
	</p>
	<p>
	{{ Form::label('quote', 'Cita para remarcar') }}
    {{ $post->quote}}
	</p>
	<p>
	{{ Form::label('fb_page', 'Página de fb') }}
    {{ $post->fb_page }}
	</p>
	<p>
	{{ Form::label('image', 'Imagen de portada') }}
	</p>
	<p>
    <img src="{{ asset('storage') }}/{{$post->image}}"></img>
    </p>

    @foreach($post->tags as $tag)
    	<span class="tag">{{ $tag->name }}</span>
    @endforeach
</div>
@endsection