@extends('layout.dev')

@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container single-col-max-width">
        <header class="blog-post-header">
            <h2 class="title mb-2">{{ $post->title }}</h2>
            <div class="meta mb-3"><span class="date">Published {{ $post->getPublishedForHuman() }}</span><span class="time">5 min read</span><span class="comment"><a  class="text-link" href="#">4 comments</a></span></div>
        </header>
        
        <div class="blog-post-body">
            <figure class="blog-banner">
                <a href="https://made4dev.com"><img class="img-fluid" src="{{ asset('assets/images/blog/blog-post-banner.jp') }}g" alt="image"></a>
            </figure>
            {!! $post->body !!}
        </div>
            
        
        <nav class="blog-nav nav nav-justified my-5">
            @if($previous)
            <a class="nav-link-prev nav-item nav-link rounded-left" href="{{ route('posts.show', $previous->getRouteKey()) }}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            @else
            <button class="nav-link-prev nav-item nav-link rounded-left" disabled>Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></button>
            @endif

            @if($next)
            <a class="nav-link-next nav-item nav-link rounded-right" href="{{ route('posts.show', $next->getRouteKey()) }}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            @else
            <button class="nav-link-next nav-item nav-link rounded-right" disabled>Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></button>
            @endif
        </nav>
        
        <div class="blog-comments-section">
        </div><!--//blog-comments-section-->
        
    </div><!--//container-->
</article>
@endsection