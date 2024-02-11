<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class DraftDetailController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);


        return view('draftdetail')->with([ 'article' => $article]);
    }
}
