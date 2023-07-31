<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Hash;

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

    public function login(Request $request)
    {
        $request->validate([
            'identity' => 'required',
            'password' => 'required',
        ]);

        $identity = $request->input('identity');
        $password = $request->input('password');

        // Determine if the user entered an email or a mobile number
        $loginType = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        // Attempt to authenticate the user using email or mobile number
        if (Auth::attempt([$loginType => $identity, 'password' => $password])) {
            // Authentication passed
            return redirect()->intended('/admin');  
        } else {
            // Authentication failed
            return back()->withErrors(['identity' => 'Invalid credentials']);
        }
    }


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    // *
    //  * Obtain the user information from GitHub.
    //  *
    //  * @return \Illuminate\Http\Response
     
    public function handleProviderCallback($service)
    {
        $userSocial = Socialite::driver($service)->user();

        //return $userSocial->name;
        $findUser=User::where('email',$userSocial->email)->first();
        if($findUser)
        {
             Auth::login($findUser);
             $url = config('app.url');
             return redirect($url);

        }
        else
        {
        $user = new User;
        $user->name = $userSocial->name;
        $user->email = $userSocial->email;
        $user->password = Hash::make(123456);
        $user->role = "S";
        $user->save();
        $this->guard()->login($user);
        $url = config('app.url');
        return redirect($url);

        }
        
    }
}
  
