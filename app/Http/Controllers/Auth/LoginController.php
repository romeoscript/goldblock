<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function attemptLogin(Request $request)
    {
        // Attempt to log in with the provided credentials
        $result = $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );

        // If login was successful, check if the user is blocked
        if ($result) {
            $user = $this->guard()->user();
            if ($user->blocked) {  // Check if the user is blocked
                $this->guard()->logout(); // Log out the user
                $request->session()->invalidate(); // Invalidate the session
                $request->session()->put('blocked', true); // Add a flag to the session
                return false; // Return false to indicate login failure
            }
        }

        return $result;
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        // Check if the failed login is due to the user being blocked
        if ($request->session()->get('blocked')) {
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.blocked')],
            ]);
        }

        // Handle normal login failures
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
}
