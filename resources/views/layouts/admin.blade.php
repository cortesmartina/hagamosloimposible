<!DOCTYPE html>
<html>
<head>
    <title>Hagamos Lo Imposible - Administración</title>
    {{ Html::style('css/bootstrap.css') }}
    {{ Html::style('css/font-awesome.css') }}
    <!-- bxSlider CSS file -->
    {{ Html::style('css/jquery.bxslider.css') }}
    {{ Html::style('css/style.css') }}

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">

@if (Auth::check())
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('posts') }}">Ver todos</a></li>
            <li><a href="{{ URL::to('posts/create') }}">Crear nuevo</a>
        </ul>
    </nav>
@endif

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