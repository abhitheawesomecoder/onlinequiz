<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use App\Setting;
use App\Mail\WelcomeUser;
use App\StudentClass;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],

       [     'name.required' => 'Name cannot be empty',
                   'email.required' => 'Email field is required',
                   'email.unique' => 'Email has been already taken !',
                   'password.required' => 'Password cannot be empty',
                   'password.min' => 'Min Password length must be 6',
                   'password.confirmed' => "Password doesn't match",]
            );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $setting = Setting::find(1);

        

        $studen_class = new StudentClass();
        $studen_class->class_name_id = $data['class_name_id'];
        $studen_class->student_name = $data['student_name'];
        $studen_class->school_name = $data['school_name'];
        $studen_class->mobile_num = $data['mobile_num'];
        $studen_class->adhaar_card_num = $data['adhaar_card_num'];
        $studen_class->student_email = $data['student_email'];
        $studen_class->class_teacher = $data['class_teacher'];
        $studen_class->division = $data['division'];
        $studen_class->fav_subject = $data['fav_subject'];
        $studen_class->schooler_ship = $data['schooler_ship'];
        $studen_class->save();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'S',
            'class_name_id'=> $data['class_name_id'],
        ]);


        if($setting->wel_mail == 1){
            Mail::to($data['email'])->send(new WelcomeUser($user));
        }
        
        return $user;
    }
}
