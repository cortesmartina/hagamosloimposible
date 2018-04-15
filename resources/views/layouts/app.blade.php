<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Hagamos Lo Imposible - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        {{ Html::style('css/bootstrap.css') }}
        {{ Html::style('css/font-awesome.css') }}
        <!-- bxSlider CSS file -->
        {{ Html::style('css/jquery.bxslider.css') }}
        {{ Html::style('css/style.css') }}

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        {{ Html::script('js/jquery.bxslider.min.js') }}
    </head>
    <body>

    @if (isset($fb_app_id))
        <!-- Facebook page plugin script -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId={{$fb_app_id}}";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- End of Facebook page plugin script -->
    @endif

    <div class="p-top @yield('class')">
        <header class="p-all">
            <div class="inline-block pull-left p-left col-md-4">
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#"></a>
                <a href="#">Inicio</a>
                 @foreach ($areas as $area)
                    {{ link_to_route('area',  $area->name, [$area->name]) }}
                @endforeach 
              </div>
              <span style="font-size:30px;cursor:pointer" class="text-@yield('header-color')" onclick="openNav()">&#9776;</span>
            </div>

            <div class="logo col-md-4 m-top-neg-half">
              <a href="index.html">@section('logo')<img src="images/hli-logo_blanco.png" width="120px" />@show</a>
            </div>
            <ul class="inline-block text-right p-right col-md-4">
              <li class="inline-block p-quarter"><a href="#"><i class="fa fa-facebook text-@yield('header-color')" aria-hidden="true"></i></a></li>
              <li class="inline-block p-quarter"><a href="#"><i class="fa fa-instagram text-@yield('header-color')" aria-hidden="true"></i></a></li>
              <li class="inline-block p-quarter"><a href="#"><i class="fa fa-twitter text-@yield('header-color')" aria-hidden="true"></i></a></li>
              <li class="inline-block p-quarter"><a href="#"><i class="fa fa-youtube-play text-@yield('header-color')" aria-hidden="true"></i></a></li>
            </ul>
        </header>
        @section('cover')
        @show
    </div>

    @yield('content')


        @section('fb_page_plugin')
            @if (isset($fb_url))
            <div class="col-md-4 pull-right">
              <div class="fb-page" data-href="{{$fb_url}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$fb_url}}" class="fb-xfbml-parse-ignore"><a href="{{$fb_url}}">{{$fb_page_name}}</a></blockquote></div>
            </div>
            @endif
        @show

        @section('contact')
            @include('contact')
        @show  

        @section('footer')
            @include('footer')
        @show

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ Html::script('js/bootstrap.min.js') }}

        <!-- SIDEBAR MENU -->
        <script>
          function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
          }

          function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
          }
        </script>

        <!-- BX SLIDER -->
        <script>
        $(document).ready(function(){
          $('.bxslider').bxSlider({
            auto: true,
            stopAutoOnClick: true,
            speed: 300,
            touchEnabled: true
          });
        });
        </script>
    </body>
</html>