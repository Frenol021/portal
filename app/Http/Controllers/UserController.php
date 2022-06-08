<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\email;




class UserController extends Controller
{
    //
    public function login(Request $pass){
        $user = User::where(['email'=>$pass->email])->first();
        if(!$user || !Hash::check($pass->password, $user->password)){

            return "wrong username or password";

        }else{
            return redirect('home');
        }

    }
    public function submit(){
        return redirect ('');
    }
  
}
