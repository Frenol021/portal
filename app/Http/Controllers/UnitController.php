<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    //
    /*public function home()
    {

        $users=Unit::all();
        return view('home',compact('users'));

       
    }
    public function enroll(){

        $users=Unit::all();
        return view('enroll',compact('users'));
        
       


    }
   public function addToCurriculum($id){

        // $cart =auth()->euser;

        $user=Auth::user()->id;
        $unit =Unit::find($id);
        $updaterec=Course::create([
            'user_id'=>$user->id,
            'unit_id'=>$unit->id,
        ]);
        
        return redirect()->back();
       

   }
   */
}

//$users=Unit::find($id);
//return view('enroll', ['user'=>$users]);--