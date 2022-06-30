<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;

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

    public function login(Request $request)
    {
        if ($request->route_name=='admin-login') {
            $role = 'Admin';
            $redirection = 'admin-locations';
        }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user=Auth::user();
            if($role==$user->roles->first()->name){
                return redirect('/admin/location');
            }else{
                return Redirect::to('admin/login')->withErrors(['email' => 'Provided credentials does not have access of this panel']);
            }
        }
        return Redirect::to('admin/login')->withErrors([
                'email' => 'Credentials do not match our database.'
            ]);
    }
}
