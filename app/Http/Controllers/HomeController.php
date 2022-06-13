<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
        if(Auth::id()){

        $user=Auth::user()->id;
       

        $unit =Unit::find($id);
            $id=$unit->id;
           $enroll=Course::create([
            'user_id'=>$user,
              'unit_id'=>$unit->id,
            
]);
             return redirect()->back();
      }    

   }
   public function curriculum(){
    $user=Auth::user();

    $count =Course::where('user_id', $user->id)->count();
    return view('curriculum', compact('user'));

   }
}