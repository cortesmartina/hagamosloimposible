@extends('layouts.admin')
@section('content')
<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}
{{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data' )) }}

    <div class="form-group">
        {{ Form::label('title', 'Título') }}
        {{ Form::text('title', null, array('class' => 'form-control required')) }}

		{{ Form::label('text1', 'Texto 1') }}
		{{ Form::text('text1', null, array('class' => 'form-control')) }}

		{{ Form::label('text2', 'Texto 2') }}
		{{ Form::text('text2', null, array('class' => 'form-control')) }}

		{{ Form::label('quote', 'Cita para remarcar') }}
		{{ Form::text('quote', null, array('class' => 'form-control')) }}

		{{ Form::label('fb_page', 'Página de facebook') }}
		{{ Form::text('fb_page', null, array('class' => 'form-control')) }}

		{{ Form::label('image', 'Imagen de portada') }}
    	{{ Form::file('image', array('class' => 'image')) }}

		Tags:
		@foreach ($tags as $tag)
		{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		@endforeach
    </div>


    {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@endsection