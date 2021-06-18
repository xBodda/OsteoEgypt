<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
class SignUpController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('pages.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|integer',
            'birth_date' => 'required|date',
            'phone' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'user_type' => 1,
            'image' => 'default.jpg',
            'birth_date' => $request['birth_date'],
            'gender' => $request['gender'],
            'phone' => $request['phone'],
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        event(new Registered($user));
        
        return redirect()->route('verification.notice');
    }
    


    public function first_step(Request $request){
        $request->validate([
            'name' => 'required|string|min:6|max:60',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $data = [
            "name" => $request['name'],
            "email" => $request['email'],
        ];

        return $this->second_step($data);
    }



    public function second_step($data = [])
    {
        
        return view('pages.signup_second_step', $data);
    }

}
