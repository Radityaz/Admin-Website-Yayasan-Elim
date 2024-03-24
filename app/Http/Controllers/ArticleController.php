<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index (Request $request) {
        // $post = ArticleTable::all();
        $post = ArticleTable::whereIn('status', ['Draft', 'Public'])->get();
        $page = 'article';
        $user = Auth::user();
        $username = $user->username;
        return view('content.article', compact('post','page','username'));
    }
    


    public function search(Request $request)
    {
        $page = 'article';
    
        $title = $request->input('title');
        $author = $request->input('author');
        $status = $request->input('status');

        $user = Auth::user();
        $username = $user->username;

        
    
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

        $post->whereIn('status', ['Public', 'Draft']);
    
        $post = $post->get();
        

    
        return view('content.article', compact('post', 'page', 'username'));
    }
    
    
}
