@extends('layouts.admin')
@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Título</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>

                <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Ver</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $value->id . '/edit') }}">Editar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection