<?php

namespace App\Http\Controllers;

use App\Models\ArticleImage;
use App\Models\ArticleTable;
use Illuminate\Http\Request;

class DraftEditController extends Controller
{
    public function index ($id) {
        $article = ArticleTable::find($id);


        return view('editdraft')->with([ 'article' => $article]);
    }

    public function update ($id, Request $request) {

        // $article = ArticleTable::find($id);

        // if ($request->hasFile('image')) {
        //     $file_name = $request->image->getClientOriginalName();
        //     $image = $request->image->storeAs('image', $file_name,'public');
        // } else {
        //     $image = $article->image;
        // };

        // if ($request->input('submitType') === 'submit') {
        //     $article->update([
        //         'title' => $request->title,
        //         'author' => $request->author,
        //         'image' => $image,
        //         'content' => $request->content,
        //         'status' => 'Draft',
    
        //     ]);
        // } elseif ($request->input('submitType') === 'draft') {
        //     $article->update([
        //         'title' => $request->title,
        //         'author' => $request->author,
        //         'image' => $image,
        //         'content' => $request->content,
        //         'status' => 'Public',
    
        //     ]);
        // } elseif ($request->input('submitType') === 'trash') {
        //     $article->update([
        //         'title' => $request->title,
        //         'author' => $request->author,
        //         'image' => $image,
        //         'content' => $request->content,
        //         'status' => 'Trash',
                
    
        //     ]);
        //     return redirect('/trash');
        // }

        // return redirect('/draft');

        $article = ArticleTable::findOrFail($id);

        // Simpan data gambar baru ke dalam tabel article_image jika ada
        if ($request->hasFile('image')) {
            $file_name = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('image', $file_name,'public');

            // Buat atau perbarui ArticleImage
            $articleImage = ArticleImage::updateOrCreate(
                ['id' => $article->image_id], // Cari berdasarkan ID gambar yang terkait dengan artikel
                ['image' => $image, 'y_offset' => $request->input('y_offset'), 'x_offset' => $request->input('x_offset'), 'size' => $request->input('size')]
            );

            // Update ID gambar di artikel dengan ID gambar baru atau yang sudah ada
            $article->image_id = $articleImage->id;
        }

        // Perbarui atribut artikel yang lain
        $article->title = $request->title;
        $article->author = $request->author;
        $article->content = $request->content;

        // Perbarui status berdasarkan submitType
        if ($request->input('submitType') === 'submit') {
            $article->status = 'Public';
        } elseif ($request->input('submitType') === 'draft') {
            $article->status = 'Draft';
            $article->save();
            return redirect('/draft');
        } elseif ($request->input('submitType') === 'trash') {
            $article->status = 'Trash';
            $article->save();
            return redirect('/trash');
        }

        // Simpan perubahan ke dalam database
        $article->save();
        return redirect('/article');

    }
}
