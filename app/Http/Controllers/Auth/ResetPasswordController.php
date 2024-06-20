<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords {
        showResetForm as defaultShowResetForm;
    }

    /**
     * Override the trait method to add additional data to the password reset view.
     *
     * @param \Illuminate\Http\Request  $request
     * @param string|null $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        $title = "Restablecer contraseña"; // Definir el título

        return view('auth.passwords.reset', [
            'token' => $token,
            'email' => $request->email,
            'title' => $title,
        ]);
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';
}
