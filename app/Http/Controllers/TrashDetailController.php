<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class TrashDetailController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);

        return view('trashdetail')->with([ 'article' => $article]);
    }
}
