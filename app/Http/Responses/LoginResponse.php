<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $role = Auth::user()->role;

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role) {
            case 'author':
                return redirect()->intended('author/dashboard');
            case 'reader':
                return redirect()->intended('/reader/dashboard');
            default:
                return redirect('/author/dashboard');
        }

    }

}