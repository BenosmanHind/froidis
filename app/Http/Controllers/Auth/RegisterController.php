<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Professional;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => ['required', 'string', 'max:255'],
            'entreprise' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'NIF' => ['required', 'string', 'max:255'],
            'RC' => ['required', 'string', 'max:255'],
            'wilaya' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'carte' => ['required'],
        ],
        [
            'password.min' => 'minimum 8 caractères',
            'password.confirmed' => 'la confirmation du mot de passe ne correspond pas',
            'password.regex' =>'confirmer le mot de passe  ',
            'email.unique' => 'ce email existe déja',
            'email.email' => 'e-mail doit être une adresse e-mail valide.',
            'phone.unique' => 'ce numéro existe déja',
            'NIF.required' =>'NIF est obligatoire',
            'RC.required' =>'RC est obligatoire',
            'wilaya.required' =>'wilaya est obligatoire',
            'entreprise.required' =>'entreprise est obligatoire',
            'address.required' =>'adresse est obligatoire',
            'password.required'=>'le mot de passe est obligatoire',
            'name.required' => 'nom est obligatoire',
            'email.required' => 'e-mail est obligatoire',
            'phone.required' => 'telephone est obligatoire',
            'carte.required' => 'la carte artisanale ou registre de commerce est obligatoire',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->type = 'professional';
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->status = 0;
        $user->password = Hash::make($data['password']);
        $user->save();

        $professional = new Professional();

        $professional->entreprise = $data['entreprise'];
        $professional->address = $data['address'];
        $professional->phone = $data['phone'];
        $professional->wilaya = $data['wilaya'];
        $professional->RC = $data['RC'];
        $professional->NIF = $data['NIF'];
        if ($data['carte'] !== null && $data['carte']->isValid()) {
            $destination = 'public/professional/cartes';
            $storageName = md5(uniqid() . time()) . '.' . $data['carte']->getClientOriginalExtension();
            $path = $data['carte']->storeAs($destination, $storageName);
            $professional->carte = $storageName;
        }
        $user->professional()->save($professional);
        return $user;

    }
}
