<div class="post-1 col-md-12">
    <div class="col-md-5 p-none">
      	<div class="col-md-1 h-2 background-red m-top-25"></div>
      	<h2 class="col-md-11">{{ $post->title }}</h2>
      	<p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
      	<span class="quote col-md-10 col-md-push-2 text-red m-bottom m-half-top"><div class="polyquote-1 background-red"></div>{{ $post->quote }}</span>
      	<p class="col-md-11 col-md-push-1">{{ $post->text2 }}</p>
    </div>

    <div class="col-md-6 pull-right">
       {{ $post->img }}
    </div>
	</div>