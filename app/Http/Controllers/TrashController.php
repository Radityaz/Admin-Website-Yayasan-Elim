<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    public function trash ($id, Request $request) {
        $article = ArticleTable::find($id);

        $user = Auth::user();
        $username = $user->username;


        // dd($article);

        $article->update([
            'status' => 'Trash',

        ]);

        return redirect('/trash')->with('success', 'Data berhasil ditambahkan!');


    }

    public function index (Request $request) {

        $user = Auth::user();
        $username = $user->username;

        // $post = ArticleTable::all();
        $post = ArticleTable::where('status', 'Trash')->get();  
        $page = 'trash';
    
        return view('content.trash', compact('post','page','username'));
    }

    public function restore ($id, Request $request) {
        $article = ArticleTable::find($id);

        // dd($article);

        $article->update([
            'status' => 'Draft',

        ]);

        return redirect('/draft')->with('success', 'Data berhasil ditambahkan!');


    }

    public function delete ($id) {
        $post = ArticleTable::find($id); // Ambil entri yang ingin dihapus
        $post->articleImage->delete();
        $post->delete(); // Hapus entri dari database



        return redirect('/trash')->with('success', 'Data berhasil ditambahkan!');

    }

    public function search(Request $request) {
        $page = 'trash';

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
        

    
        return view('content.trash', compact('post', 'page','username'));
    }
}
