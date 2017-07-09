<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Hagamos Lo Imposible - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        @section('sidebar')
            Acá va el menú
        @show

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
        @section('sidebar')
            Acá va el footer
        @show
    </body>
</html>