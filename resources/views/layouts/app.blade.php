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
        {{ Html::js('js/jquery.bxslider.min.js') }}
    </head>
    <body>

    @if ($fb_app_id)
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

        

        <div class="container">
            @yield('content')
        </div>

        @section('fb_page_plugin')
            @if ($fb_url)
                <div class="fb-page" data-href="{{$fb_url}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$fb_url}}" class="fb-xfbml-parse-ignore"><a href="{{$fb_url}}">{{$fb_page_name}}</a></blockquote></div>
            @endif
        @show

        @section('contact')
            @include('contact')
        @show  

        @section('footer')
            Acá va el footer
        @show
    </body>
</html>