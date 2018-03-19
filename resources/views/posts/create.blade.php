@extends('layouts.admin')
@section('content')
<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'posts', 'enctype' => 'multipart/form-data' )) }}

    <div class="form-group">
        {{ Form::label('title', 'Título') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control required')) }}

		{{ Form::label('text1', 'Texto 1') }}
		{{ Form::text('text1', Input::old('text1'), array('class' => 'form-control')) }}

		{{ Form::label('text2', 'Texto 2') }}
		{{ Form::text('text2', Input::old('text2'), array('class' => 'form-control')) }}

		{{ Form::label('quote', 'Cita para remarcar') }}
		{{ Form::text('quote', Input::old('quote'), array('class' => 'form-control')) }}

		{{ Form::label('fb_page', 'Página de facebook') }}
		{{ Form::text('fb_page', Input::old('fb_page'), array('class' => 'form-control')) }}

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