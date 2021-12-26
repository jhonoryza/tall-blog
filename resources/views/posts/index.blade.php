@foreach ($posts as $post)
    <div class="item mb-5">
        <div class="row g-3 g-xl-0">
            <div class="col-2 col-xl-3">
                <img class="img-fluid post-thumb " src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">
            </div>
            <div class="col">
                <h3 class="title mb-1"><a class="text-link" href="{{ route('posts.show', $post->getRouteKey()) }}">{{ $post->title }}</a></h3>
                <div class="meta mb-1"><span class="date">Published {{ $post->getPublishedForHuman() }}</span><span class="time">5 min read</span><span class="comment"><a class="text-link" href="#">8 comments</a></span></div>
                <div class="intro">{{ $post->desc }}</div>
                <a class="text-link" href="{{ route('posts.show', $post->getRouteKey()) }}">Read more &rarr;</a>
            </div><!--//col-->
        </div><!--//row-->
    </div><!--//item-->
@endforeach
{!! $posts->links() !!}
