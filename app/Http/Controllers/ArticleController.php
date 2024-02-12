<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index (Request $request) {
        // $post = ArticleTable::all();
        $post = ArticleTable::whereIn('status', ['Draft', 'Public'])->get();
        $imageId = $post->image_id;
        $page = 'article';

        dd($imageId);
    
        return view('content.article', compact('post','page'));
    }


    public function search(Request $request)
    {
        $page = 'draft';
    
        $title = $request->input('title');
        $author = $request->input('author');
        $status = $request->input('status');
        
    
        $post = Articletable::query();
    
        if ($title) {
            $post->where('title', 'LIKE', "%{$title}%");
        }
    
        if ($author) {
            $post->Where('author', 'LIKE', "%{$author}%");
        }
    
        if ($status) {
            $post->Where('status', 'LIKE', "%{$status}%");
        }
    
        $post = $post->get();
        

    
        return view('content.article', compact('post', 'page'));
    }
    
    
}
