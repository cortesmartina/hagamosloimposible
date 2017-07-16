@extends('layouts.app')
@section('title', $area .' - '. $regional)
@section('header-color', 'red')
@section('logo')<img src="../images/hli-logo_red.png" width="120px" />@endsection



@section('content')
    
	<div class="polyarea"><h2>{{ $regional}}</h2>
	<h3>{{ $area }}</h3>
	</div>
 
  	@foreach ($posts as $post)
    <div class="post-1 col-md-5 col-md-push-1 first-post">
        <div class="col-md-1 h-2 background-red m-top-25"></div>
        <h2 class="col-md-11">{{ $post->title }}</h2>
        <p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
        <span class="quote col-md-10 col-md-push-2 text-red m-bottom m-half-top">
        <div class="polyquote-1 background-red"></div>
        {{ $post->text1 }}</span>
        <p class="col-md-11 col-md-push-1">{{ $post->text2 }}</p>
    </div>

    <div class="col-md-5 p-all p-top-none m-right col-md-push-2 m-top-60" style="height: 90vh; overflow: hidden;">
      {{ $post->img }}
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
      <p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
    </div>
  </div>
	@endforeach






@endsection