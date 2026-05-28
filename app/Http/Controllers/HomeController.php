<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'user'])
            ->where('status', 'published')
            ->paginate(10);

        return view('home', compact('posts'));
    }
}
