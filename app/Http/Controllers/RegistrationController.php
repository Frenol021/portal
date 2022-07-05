<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    //
    public function registration()
    {
    
        return view('registration');
    }

    public function insert(Request $req){
        
        
        $user = User::query()->create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'employer_no'=>$req->employer_no,
            'phone_no'=>$req->phone_no,
            
            

        ]);

        return redirect('login');
       
    }
}
