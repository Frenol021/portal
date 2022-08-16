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
use phpDocumentor\Reflection\PseudoTypes\False_;
use phpDocumentor\Reflection\PseudoTypes\True_;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Content;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Illuminate\Support\Facades\DB;

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
        

        //$contents = Content::select('unit_id')->get()->first()->unit_id;
        $conte = DB::table('contents')->pluck('unit_id')->all();

        //finding the id which is 
        $user = Auth::user()->id;
        
        $use = Course::where('user_id', $user)->first();

        if ($use == null) {
          Alert::warning('heey', 'have you enrolled and payed for the course');
          return redirect()->back();
        }else{
          $id = Course::where('user_id', $user)->first()->unit_id;
          
        }
       //displaying the table of content to specific payed course
  
        if(in_array($id, $conte) && $id==7){
         
        $contents = Content::where('unit_id', $id)->pluck('subtopic');
   
          return view('enroll', compact('contents'));
          
        }elseif(in_array($id, $conte) && $id==6){
          $contents = Content::where('unit_id', $id)->pluck('subtopic');
   
          return view('enroll', compact('contents'));

        }elseif(in_array($id, $conte) && $id==5){
          $contents = Content::where('unit_id', $id)->pluck('subtopic');
   
          return view('enroll', compact('contents'));

        }elseif(in_array($id, $conte) && $id==4){
             $contents = Content::where('unit_id', $id)->pluck('subtopic');
   
          return view('enroll', compact('contents'));
        }elseif(in_array($id, $conte) && $id==3){
          $contents = Content::where('unit_id', $id)->pluck('subtopic');

          return view('enroll', compact('contents'));
        }elseif(in_array($id, $conte) && $id==2){
          $contents = Content::where('unit_id', $id)->pluck('subtopic');

          return view('enroll', compact('contents'));
         }else{
          return("it seems you have not paid for the course ");
        }
    
      }
// to be able to study in sequential order

public function studying(){

}

      public function addToCurriculum($id){

        $user=Auth::user()->id;
   
        $users =Course::where('user_id', $user)->first();

   
        if($users){

          Alert::warning('heey', 'you can just enroll once');
          return redirect()->back();


      } else{
       
       $unit =Unit::find($id);
     
            $id=$unit->id;
          
           $uni=Course::create([
            'user_id'=>$user,
              'unit_id'=>$unit->id,
              
]);

$name =Auth::user()->name;
$email =Auth::user()->email;
$course=Unit::find($id)->unit;

$data = [
  "name"=>" hello  $name thanks for joining shiftech, we have received your enrollment for $course"
];
Mail::to("$email")->send(new Email($data));
Alert::success('thanks for enrolling', 'an email has been sent to you');
             return redirect()->back();
      }
      
   }
   public function curriculum(){
    
    $user=Auth::user()->id;
    $users =Course::query()->where('user_id', $user)->get();
  
    return view('curriculum', compact('users'));


   }
   
   function removeCurriculum($id)
   {
    
       Course::destroy($id);
       
       Alert::success('enrollment', 'removed successfully');

       return redirect('curriculum');

   }

   public function checKout()
   {
    $user=Auth::user()->id;
    $users =Course::query()->where('user_id', $user)->get();
    return view('checkout1', compact('users'));
   }

}
