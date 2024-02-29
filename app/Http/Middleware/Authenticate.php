<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
    if (!$request->expectsJson()) {
        // Redirect ke halaman login dengan pesan
        return redirect('signup')->with('message', 'invalid');

    }
    
    return null;
}

}
