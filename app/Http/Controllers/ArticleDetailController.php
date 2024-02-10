<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);


        return view('articledetail')->with([ 'article' => $article]);
    }
}
