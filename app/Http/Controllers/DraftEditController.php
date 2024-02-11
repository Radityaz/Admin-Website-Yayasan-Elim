<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class DraftEditController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);


        return view('editdraft')->with([ 'article' => $article]);
    }

    public function update ($id, Request $request) {

        $article = ArticleTable::find($id);

        if ($request->hasFile('image')) {
            $file_name = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('image', $file_name,'public');
        } else {
            $image = $article->image;
        };

        if ($request->input('submitType') === 'submit') {
            $article->update([
                'title' => $request->title,
                'author' => $request->author,
                'image' => $image,
                'content' => $request->content,
                'status' => 'Draft',
    
            ]);
        } elseif ($request->input('submitType') === 'draft') {
            $article->update([
                'title' => $request->title,
                'author' => $request->author,
                'image' => $image,
                'content' => $request->content,
                'status' => 'Public',
    
            ]);
        }

        return redirect('/draft');
    }
}
