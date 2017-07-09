@extends('layouts.app')
@section('title', $area .' - '. $regional)
@section('content')
    Área {{ $area}}
    Regional {{ $regional}}

    @foreach ($posts as $post)
        <p> {{ $post->title }}</p>
    @endforeach
@endsection