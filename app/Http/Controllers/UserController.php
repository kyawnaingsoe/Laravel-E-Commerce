<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(UserLoginRequest $request){

        $phone = $request->input('phone');
        $password = $request->input('password');

        $user = User::where('phone', $phone)->first();
        if($user){
            if(Hash::check($password, $user->password)){
                Auth::login($user);
                return redirect()->route('admin-home');
            }else{
                return redirect()->back()->with('error','Password Error!');
            }
        }else{
            return redirect()->back()->with('error','Creditial Error!');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
