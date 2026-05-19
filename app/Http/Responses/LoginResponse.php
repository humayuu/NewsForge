<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        // Redirect based on role
        $redirectTo = match ($user->role) {
            'admin', 'author' => '/admin/dashboard',
            default           => '/dashboard',  // regular users
        };

        return redirect()->intended($redirectTo);
    }
}
