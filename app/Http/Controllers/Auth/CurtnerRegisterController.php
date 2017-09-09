<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Support\Facades\Redirect;

class CurtnerRegisterController extends Controller
{

    public function __construct(){
      $this->middleware('guest:curtner', ['except' => ['logout']]);
    }

    public function showRegistrationForm(){
      return view ('auth.curtner-register');
    }

    public function register(Request $request){
      //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $curtner = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($curtner);

       //Redirects sellers
        return redirect()->intended(route('curtner.dashboard'));
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'store_name' => 'required|max:191',
            'owner' => 'required|max:191',
            'email' => 'required|email|max:191|unique:curtners',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return Curtner::create([
            'store_name' => $data['store_name'],
            'owner' => $data['owner'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone_number'],
            'address' => $data['address']
        ]);
    }

}
