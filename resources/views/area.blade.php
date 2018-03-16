@extends('layouts.app')
@section('title', $area)
@section('class', 'cover')
@section('header-color', 'white')

@section('cover')
<div class="col-md-12 p-all p-top-none">
      <img src="images/barrios.jpg"  width="100%" />
    </div> 
    <div class="area-container background-blue col-md-5">
        <div class="col-md-1 h-2 background-white m-top col-md-push-1 m-half-left"></div>
        <h2 class="col-md-12 col-md-push-1">{{ $area }}</h2>
        
        <ul class="col-md-5 m-top col-md-push-1">
        @foreach ($regionals as $regional)
	        @if ($loop->index == "7")
	        </ul>
	        <ul class="col-md-5 m-top col-md-push-1">
	        @endif
	        <li>{{ link_to_route('area',  $regional->name, [$area, $regional->name]) }}</li>
        @endforeach
        </ul>
      </div>
    </div> 
@endsection


@section('content')
	<div class="col-md-push-6 col-md-1 h-2 background-red m-top-25 m-bottom"></div>

	@foreach ($posts as $post)
		@if (($loop->index % 2) == 1)
			@include('area.post-left', ['post' => $post])
		@else
			@include('area.post-right', ['post' => $post])	
		@endif

		<div class="post-1 col-md-12">
		    <div class="col-md-5 p-none">
		      	<div class="col-md-1 h-2 background-red m-top-25"></div>
		      	<h2 class="col-md-11">{{ $post->title }}</h2>
		      	<p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
		      	<span class="quote col-md-10 col-md-push-2 text-red m-bottom m-half-top"><div class="polyquote-1 background-red"></div>{{ $post->quote }}</span>
		      	<p class="col-md-11 col-md-push-1">{{ $post->text2 }}</p>
		    </div>

		    <div class="col-md-6 pull-right">
		       {{ $post->img }}
		    </div>
	  	</div>

	   	<div class="post-2 col-md-12">
		    <div class="col-md-7 m-top-25">
		       {{ $post->img }}
		    </div>
		    <div class="col-md-5">
		      <div class="col-md-1 h-2 background-blue m-top-25"></div>
		      <h2 class="col-md-11">{{ $post->title }}</h2>
		      <p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
		      <span class="quote col-md-10 col-md-push-2 text-blue m-bottom m-half-top">
		      <div class="polyquote-2 background-blue"></div>
		      {{ $post->quote }}</span>
		      <p class="col-md-11 col-md-push-1">{{ $post->text2 }}</p>
		    </div>
	  	</div>
	@endforeach
@endsection