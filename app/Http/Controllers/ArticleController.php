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
}
