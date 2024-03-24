<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $user = Auth::user();

        $username = $user->name;
        dd($user);

        return view('index', compact('username'));
    }
}
