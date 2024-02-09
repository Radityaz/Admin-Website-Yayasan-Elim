<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index (Request $request) {
        $post = ArticleTable::all();
        $page = 'article';
    
        return view('content.article', compact('post','page'));
    }


    public function search(Request $request)
    {
        $page = 'article';
    
        $title = $request->input('title');
        $author = $request->input('author');
    
        $post = Articletable::query();
    
        if ($title) {
            $post->where('title', 'LIKE', "%{$title}%");
        }
    
        if ($author) {
            $post->orWhere('author', 'LIKE', "%{$author}%");
        }
    
        $post = $post->get();
    
        return view('content.article', compact('post', 'page'));
    }
    
    
}
