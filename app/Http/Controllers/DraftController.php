<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DraftController extends Controller
{
    public function index (Request $request) {
        // $post = ArticleTable::all();
        $post = ArticleTable::where('status', 'Draft')->get();  
        $page = 'draft';
        $user = Auth::user();
        $username = $user->username;
    
        return view('content.draft', compact('post','page','username'));
    }


    public function search(Request $request) {
        $page = 'draft';

        $user = Auth::user();
        $username = $user->username;

    
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
            $post->Where('status', $status);
        }

        
    
        $post = $post->get();
        

    
        return view('content.draft', compact('post', 'page','username'));
    }
}
