<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/intro-2';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);
        $credentials["status"] = 1;

        return $this->guard()->attempt(
            $credentials, $request->has('remember')
        );
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function authenticated($request, $user)
    {
        if ($user->type != 'admin') {
            $this->redirectTo = '/intro-2';
        } else {
            $this->redirectTo = '/intro-2';
        }

        return redirect()->intended($this->redirectPath());
    }
}
