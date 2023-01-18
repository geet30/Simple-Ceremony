<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Config;
use App\Models\{User};
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
    // protected $redirectTo = '/';
    

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
        try {
             $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
            $response = User::redirectToRole($request);
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {               
                $user=Auth::user();
                if($response['role'] == $user->roles->first()->name){
                   
                    return redirect($response['redirection']);
                }
                else if($response['role'] != $user->roles->first()->name){
                    request()->session()->invalidate();
                    request()->session()->regenerateToken();
                    return Redirect::to('login')->withErrors(['email' => 'Provided credentials does not have access of this panel']);
                    
                }
                else{
                    return Redirect::to('login')->withErrors(['email' => 'Provided credentials does not have access of this panel']);
                }
            }
            return Redirect::to('login')->withErrors([
                    'email' => 'Password is incorrect'
            ]);
        }
        catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
        
    }
  
    public function logout() {
        try {
            Auth::user();
            request()->session()->invalidate();
            request()->session()->regenerateToken();       
            return redirect()->route('login');
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
       
    }
}
