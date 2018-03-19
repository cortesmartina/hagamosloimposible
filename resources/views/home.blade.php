@extends('layouts.app')
@section('title', 'Inicio')
@section('header-color', 'white')

@section('cover')
    <div class="col-md-12 p-all p-top-none">
        <ul class="bxslider">
          <li><img src="images/home-slider/pic1.jpg" /></li>
          <li><img src="images/home-slider/pic2.jpg" /></li>
          <li><img src="images/home-slider/pic3.jpg" /></li>
          <li><img src="images/home-slider/pic4.jpg" /></li>
        </ul> 
     </div> 
@endsection

@section('content')
    <div class="col-md-12 areas section">
      <div class="polygon-1"></div>
      
      <div class="col-md-4">
        <div class="col-md-2 h-2 background-purple"></div>
        <h2 class="text-purple m-bottom">¿Qué hacemos?</h2>
        <div class="col-md-11 col-md-push-1 m-top area-option">
          <a href="#">
            <span class="overlay"></span>
            <img src="images/home-slider/pic4.jpg" width="100%" />
            <h3>Comunicación</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="col-md-push-2 col-md-10 m-bottom area-option">
          <a href="#">
            <span class="overlay"></span>
            <img src="images/home-slider/pic4.jpg" width="100%" />
            <h3>En los barrios</h3>
          </a>
        </div>
        <div class="col-md-8 area-option">
          <a href="#">
            <span class="overlay"></span>
            <img src="images/home-slider/pic4.jpg" width="100%" />
            <h3>Géneros</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="col-md-12 m-bottom area-option">
          <a href="#">
            <span class="overlay"></span>
            <img src="images/home-slider/pic4.jpg" width="100%" />
            <h3>En los espacios de estudio</h3>
          </a>
        </div>
        <div class="col-md-8 area-option">
          <a href="#">
            <span class="overlay"></span>
            <img src="images/home-slider/pic4.jpg" width="100%" />
            <h3>Arte y Cultura</h3>
          </a>
        </div>
      </div>
      
    </div>




    <div class="col-md-12 m-top regions section">
      <div class="col-md-8 background-blue background"></div>
      <div class="col-md-6 m-top">
        <div class="col-md-1 h-2 background-white m-top"></div>
        <h2 class="text-white col-md-12 p-none m-bottom">¿Dónde estamos?</h2>
        <ul class="col-md-6 m-top">
        	@foreach ($regionals as $regional)
        	<li class="dropdown">
              <a data-toggle="collapse" data-target="#{{ $regional->id }}">{{ $regional->name }}</a>
              <ul id="{{ $regional->id }}" class="collapse p-left">
              	@foreach ($regional->areas as $area)
              		<li>{{ link_to_route('area',  $area->name, [$area->name, $regional->name]) }}</li>
              	@endforeach
           	  </ul>
           	</li>

   			@if ($loop->index == "7")
			    </ul>
        		<ul class="col-md-6 m-top">
			@elseif ($loop->index === "last")
			   	</ul>
			@endif
        	@endforeach
      </div>
      <div class="col-md-6 m-top p-top">
        <img src="images/home-slider/pic4.jpg" width="100%" />
      </div>
    </div>
      
@endsection

