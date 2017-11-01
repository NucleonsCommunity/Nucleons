<?php

namespace Nucleons\Http\Controllers\Auth;

use Nucleons\User;
use Nucleons\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'number' => 'required|string|max:15|min:6|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Nucleons\User
     */
    protected function create(array $data)
    {
        $exam = array('gate', 'ies', 'ssc', 'banking');

        for ($i=0; $i<count($exam); $i++) {
            if (isset($data[$exam[$i]]))
                $data[$exam[$i]] = True;
            else
                $data[$exam[$i]] = False;
        }

        return User::create([
            'name' => $data['name'],
            'number'=> $data['number'],
            'gate' => $data['gate'],
            'ies' => $data['ies'],
            'ssc' => $data['ssc'],
            'banking' => $data['banking'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
