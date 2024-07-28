<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Show the registration form
    public function show(){
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request){
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());

        return redirect()->route('welcome');
    }

    // Validate the request
    protected function validator(array $data){
        return validator::make($data, [
            'name'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'unique:users', 'max:255'],
            'password'=> ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    // Create a new user
    protected function create(array $data){
        return user::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password'])
        ]);
    }
}
