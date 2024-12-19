<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use LDAP\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/test';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

public function Login(Request $request) {
        $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        'admin' => [1]
    ]);

   //if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin' => 1])) {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $request->session()->regenerate();

        return redirect()->intended('test');
    }

    return back()->withErrors([
        'email' => 'Solo pueden iniciar sesión los administradores',
        ])->onlyInput('email');

}

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
