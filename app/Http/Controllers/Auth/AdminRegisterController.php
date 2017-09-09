<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;
//use Illuminate\Support\Facades\Redirect;

class AdminRegisterController extends Controller
{

    public function __construct(){
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showRegistrationForm(){
      return view ('auth.admin-register');
    }

    public function register(Request $request){
      //Validates data
        $this->validation($request);

        Admin::create($request);

       //Redirects sellers
        return redirect()->intended(route('admin.dashboard'));
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'job_title' => $data['job_title'],
        ]);
    }
}
