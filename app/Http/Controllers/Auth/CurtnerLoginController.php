<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Support\Facades\Redirect;

class CurtnerLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest:curtner', ['except' => ['logout']]);
    }

    /*public function showRegistrationForm(){
      return view ('auth.curtner-register');
    }

    public function register(Request $request){

    }*/

    public function showLoginForm(){
      return view ('auth.curtner-login');
    }

    public function login(Request $request){
      //validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      //attempt to log the user in
      if (Auth::guard('curtner')->attempt([
        'email' => $request->email,
        'password' => $request->password
      ], $request->remember)) {
        return redirect()->intended(route('curtner.dashboard'));
      }
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('curtner')->logout();
        return redirect('/');
    }
}
