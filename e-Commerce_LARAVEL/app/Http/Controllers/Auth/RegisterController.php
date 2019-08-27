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
            'name' => ['required', 'string', 'max:255'],
            'nickname'=>['required', 'string', 'min:4', 'max:10','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'regex:/DH/', 'min:8', 'confirmed'],
            'country' => ['required','string','max:50'],
            'city' => ['required','string','max:50'],
            'avatar' => ['required', 'image'],
        ]
      ,[
          'required' => 'El campo :attribute es obligatorio',
          'nickname.digits'=>'El :attribute debe contener entre 4 y 10 caracteres',
          'password.confirmed' => 'Las contraseñas deben coincidir',
          'password.regex' => 'La contraseña debe contener al menos una D y H seguidas'
      ]
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

      $request = request();
//      $profileImage = $request->file('avatar');
//      $profileImageName = uniqid('img-') . '.' . $profileImage->extension();
      // $profileImage->store('public/avatars', $profileImageName);
        return User::create([
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'city' => $data['city'],
            'avatar' => $request->file('avatar')->store('public/avatar'),
        ]);
    }
}
