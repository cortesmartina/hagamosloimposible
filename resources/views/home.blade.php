@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    Área
        @foreach ($areas as $area)
            <p> {{ link_to_route('area',  $area->name, [$area->name]) }}</p>
        @endforeach
    ¿Dónde estamos?
        @foreach ($regionals as $regional)
            <p> {{ $regional->name }}</p>
        @endforeach
@endsection

