<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
class UnitController extends Controller
{
    //
    public function home()
    {

        $users=Unit::all();
        return view('home',compact('users'));

       
    }
    public function enroll($id){
        

        $users=Unit::find($id);
        return view('enroll',['users'=>$users]);
    }
}
