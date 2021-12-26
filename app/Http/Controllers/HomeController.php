<?php

namespace App\Http\Controllers;

use App\Models\Post;
//use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function baseQuery()
    {
        return (new Post)->newQuery()->orderBy('id', 'desc');
    }
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = $this->baseQuery()->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function show(Post $post): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // get previous post
        $previous = $this->baseQuery()->where('id', '<', $post->id)->first();
        // get next post
        $next = $this->baseQuery()->where('id', '>', $post->id)->first();
        return view('posts.show', compact('post', 'previous', 'next'));
    }
}
