	<div class="post-2 col-md-12">
    <div class="col-md-7 m-top-25">
              <img src="{{ asset('storage') }}/{{$post->image}}" class="postimage"></img>
    </div>
    <div class="col-md-5">
      <div class="col-md-1 h-2 background-blue m-top-25"></div>
      <h2 class="col-md-11">{{ $post->title }}</h2>
      <p class="col-md-11 col-md-push-1">{{ $post->text1 }}</p>
      <span class="quote col-md-10 col-md-push-2 text-blue m-bottom m-half-top">
      <div class="polyquote-2 background-blue"></div>
      {{ $post->quote }}</span>
      <p class="col-md-11 col-md-push-1">{{ $post->text2 }}</p>
    </div>
	</div>