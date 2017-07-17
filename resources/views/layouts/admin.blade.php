<!DOCTYPE html>
<html>
<head>
    <title>Hagamos Lo Imposible - Administración</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">Ver todos</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Crear nuevo</a>
    </ul>
</nav>

<h1>@yield('action')</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@section('content')
@show


</div>
</body>
</html>