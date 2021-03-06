<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/products';

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
            'last_name'     => 'required|max:10',
            'first_name'    => 'required|max:10',
            'email'         => 'required|email',
            'zipcode'       => 'required|integer|digits:7',
            'prefecture'    => 'required|max:5',
            'municipality'  => 'required|max:10',
            'address'       => 'required|max:15',
            'apartments'    => 'max:20',
            'phone_number'  => 'required|digits_between:10,11',
            'password'      => 'required|string|between:6,15|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        return User::create([
            'last_name'    => $data['last_name'],
            'first_name'   => $data['first_name'],
            'zipcode'      => $data['zipcode'],
            'prefecture'   => $data['prefecture'],
            'municipality' => $data['municipality'],
            'address'      => $data['address'],
            'apartments'   => $data['apartments'],
            'email'        => $data['email'],
            'phone_number' => $data['phone_number'],
            'password'     => bcrypt($data['password']),
        ]);
    }
}
