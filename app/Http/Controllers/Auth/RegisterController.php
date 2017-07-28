<?php

namespace gymuss\Http\Controllers\Auth;

use gymuss\User;
use gymuss\Http\Controllers\Controller;
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
            'is_admin'=>'required|smallint|max:6',
            'name' => 'required|string|max:255',
            'rut'=>'required|string|max:15',
            'usu_ape_pat'=>'required|string|max:255',
            'usu_ape_mat'=>'required|string|max:255',
            'usu_gen'=>'required|string',
            'usu_nom_carr'=>'required|string|max:255',
            'usu_fech_nac '=>'required|max:255',
            'usu_tel'=>'required|string|max:255',
            'usu_nom_cont_eme'=>'required|string|max:255',
            'usu_tel_eme'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'usu_email'=>'required|max:255',
            'usu_ano_ing'=>'required|max:255',
            'usu_fech_ins'=>'required|max:255',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'is_admin'=>$data['is_admin'],
            'name' => $data['name'],
            'rut'=>$data['rut'],
            'usu_ape_pat'=>$data['usu_ape_pat'],
            'usu_ape_mat'=>$data['usu_ape_mat'],
            'usu_gen'=>$data['usu_gen'],
            'usu_nom_carr'=>$data['usu_nom_carr'],
            'usu_fech_nac'=>$data['usu_fech_nac'],
            'usu_tel'=>$data['usu_tel'],
            'usu_nom_cont_eme'=>$data['usu_nom_cont_eme'],
            'usu_tel_eme'=>$data['usu_tel_eme'],
            'email' => $data['email'],
            'usu_email' => $data['usu_email'],
            'usu_ano_ing' => $data['usu_ano_ing'],
            'usu_fech_ins' => $data['usu_fech_ins'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
