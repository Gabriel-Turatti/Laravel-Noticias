<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;

class HomeController extends Controller {
    public function index() {
        $posts = Post::all();
        $categories = Category::all();

        return view('home', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function new($id) {
        $post = Post::find($id);
        $categories = Category::all();

        return view('new', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
