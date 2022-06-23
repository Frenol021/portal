<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\returnSelf;
use App\Mail\Email;
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

        
        
        $users = Course::where('unit_id',$id)->first();
        
        if(!$users){
          
        $user=Auth::user()->id;
       $unit =Unit::find($id);
            $id=$unit->id;
           $enroll=Course::create([
            'user_id'=>$user,
              'unit_id'=>$unit->id,
            
]);
$data = [
  "name"=>" hello thanks for joining shiftech, you have enrolled"
];
Mail::to("nyawiradwanjohi@gmail.com")->send(new Email($data));

             return redirect()->back()->with('message', 'course added successfully');
      } else{
        return redirect()->back()->with('message', 'you can enroll one course once');
      }
      
   }
   public function curriculum(){
    
    $user=Auth::user()->id;
    $users =Course::query()->where('user_id', $user)->get();
    
    return view('curriculum', compact('users'));
    if($users){
      return "hello";
   }
    
 

   }
   function removeCurriculum($id)
   {
    
       Course::destroy($id);
       return redirect('curriculum')->with('message', 'course removed successfully');
   }
   /*function sendEmail(){
    $data = [
        "name"=>"hello"
    ];
    Mail::to("defenol021@gmail.com")->send(new Email($data));

    $users=Unit::all();
    return redirect('home')->with('message', 'thanks for enrolling an email has been');
}*/
}
