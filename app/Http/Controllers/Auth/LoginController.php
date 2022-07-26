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
    protected $redirectTo = '/locations';

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
        $redirection = '';
   
        if ($request->route_name=='admin-login') {
            $role = 'Admin';
            $redirection = 'locations';
        }
        else if ($request->route_name=='partner-login') {
            $role = 'Partner';
            $redirection = 'add-ons';
        }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
         dd($request->route_name);die;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            // return redirect($redirection);
            $user=Auth::user();
            if($role = $user->roles->first()->name){
                return redirect($redirection);
            }else{
                return Redirect::to('login')->withErrors(['email' => 'Provided credentials does not have access of this panel']);
            }
        }
        return Redirect::to('login')->withErrors([
                'email' => 'Credentials do not match our database.'
            ]);
    }
    public function logout() {
        $user=Auth::user();
        // $input['language'] = 'nl';
        // $result = User::where('id', $user->id)->update($input);
        // Auth::logoutCurrentDevice(); 
        request()->session()->invalidate();
        request()->session()->regenerateToken();       
        return redirect()->route('login');
    }
}
