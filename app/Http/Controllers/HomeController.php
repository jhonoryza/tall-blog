<?php

namespace App\Http\Controllers;

use App\Models\Post;
//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = (new Post)->newQuery()->simplePaginate(3);
        return view('home', compact('posts'));
    }
}
