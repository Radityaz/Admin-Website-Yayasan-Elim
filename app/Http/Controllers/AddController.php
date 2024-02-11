<?php

namespace App\Http\Controllers;

use App\Models\ArticleTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AddController extends Controller
{
    public function add (Request $request) {

        $DateNow = Carbon::now();

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('image', $file_name,'public');

        if ($request->input('submitType') === 'submit') {
            $data = new ArticleTable();
            $data->title = $request->title;
            $data->author = $request->author;
            $data->image = $image;
            $data->content = $request->content;
            $data->status = 'Public';
            $data->date = $DateNow->format('d F Y');
        } elseif ($request->input('submitType') === 'draft') {
            $data = new ArticleTable();
            $data->title = $request->title;
            $data->author = $request->author;
            $data->image = $image;
            $data->content = $request->content;
            $data->status = 'Draft';
            $data->date = $DateNow->format('d F Y');
        }

        // $data = new ArticleTable();
        // $data->title = $request->title;
        // $data->author = $request->author;
        // $data->image = $image;
        // $data->content = $request->content;
        // $data->status = $request->status;
        // $data->date = $DateNow->format('d F Y');

        $data->save();
        return redirect('/article')->with('success', 'Data berhasil ditambahkan!');

    }
}
