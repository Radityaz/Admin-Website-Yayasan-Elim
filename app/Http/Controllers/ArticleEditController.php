<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;

class ArticleEditController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);


        return view('edit')->with([ 'article' => $article]);
    }

    public function update ($id, Request $request) {

        $article = ArticleTable::find($id);

        if ($request->hasFile('image')) {
            // Jika pengguna mengunggah gambar baru
            $file_name = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('image', $file_name,'public');
        } else {
            // Jika pengguna tidak mengunggah gambar baru
            // Gunakan foto yang sudah ada di database
            $image = $article->image;
        };

        $article->update([
            'title' => $request->title,
            'author' => $request->author,
            'image' => $image,
            'content' => $request->content,
        ]);
        return redirect('/article');
    }
}
