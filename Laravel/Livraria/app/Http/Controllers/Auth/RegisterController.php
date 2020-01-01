<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
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
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name'          =>  'required|string|max:255',
            'dt_nasc'       =>  'date_format:Y-m-d',
            'address'       =>  'required|string|max:255',
            'add_number'    =>  'required|numeric',
            'city'          =>  'required|max:255',
            'uf'            =>  'required|max:2',
            'email'         =>  'required|string|email|max:255|unique:users',
            'password'      =>  'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\User
     */
    protected function create(array $request)
    {

        // try
        // {
        //     if(User::where('email', $request->email)->exists())
        //     {
        //         return $this->returnJson(422, 'Oops! esse usuário já existe, por gentileza recupere sua senha ou cadastre um novo email.', $request->email);
        //     }

        return User::create([
            'name'          =>  $request['name'],
            'dt_nasc'       =>  $request['dt_nasc'],
            'address'       =>  $request['address'],
            'add_number'    =>  $request['add_number'],
            'city'          =>  $request['city'],
            'uf'            =>  $request['uf'],
            'email'         =>  $request['email'],
            'password'      =>  Hash::make($request['password']),
        ]);

        // }catch(\Exception $e)
        // {
        //     return 'Ocorreu um erro ao salvar seu usuário, por gentileza, tente novamente mais tarde.';
        // }
   
    }
}
