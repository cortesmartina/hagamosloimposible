@extends('layouts.app')
@section('title', $area .' - '. $regional)
@section('header-color', 'red')
@section('logo')<img src="../images/hli-logo_red.png" width="120px" />@endsection



@section('content')
    
	<div class="polyarea"><h2>{{ $regional}}</h2>
	<h3>{{ $area }}</h3>
	</div>
 
  @foreach ($posts as $post)
    @if (($loop->index % 2) == 1)
      @include('area.post-left', ['post' => $post])
    @else
      @include('area.post-right', ['post' => $post])  
    @endif
	@endforeach
@endsection