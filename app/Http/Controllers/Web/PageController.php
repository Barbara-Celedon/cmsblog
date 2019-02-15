<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PageController extends Controller {

    public function blog() {
        //blog
        $posts = Post::orderBy('id', 'Desc')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts'));
    }

    public function post($slug) {
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }

    public function category($slug) {

        $category = Category::where('slug', $slug)->pluck('id')->first();
        //el pluck trae una matrz de registros (un arreglo)

        $posts = Post::where('category_id', $category)
                        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

}
