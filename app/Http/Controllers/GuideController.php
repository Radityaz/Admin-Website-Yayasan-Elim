<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function index (Request $request) {
        $page = 'guide';

        $user = Auth::user();
        $username = $user->username;
    
        return view('content.guide', compact('page','username'));
    }
}
