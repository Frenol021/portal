<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class ProgramController extends Controller
{
    //
    //graphic design
    public function program(){
        return view('courses/graphic');
    }

    public function graphicNotes(){ 
        

        $pdf = PDF::loadView('courses/webpdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('graphic.pdf'); 
    }

    //mobile development

    public function mobile(){
        return view('courses/mobile');
    }


    public function mobileNotes(){ 
        

        $pdf = PDF::loadView('courses/mpdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('mobile.pdf'); 
    }
    
    // data analysis
    public function data(){
        return view('courses/data');
    }

    public function dataNotes(){ 
        

        $pdf = PDF::loadView('courses/analysispdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('data.pdf'); 
    }

    //cyber security
    public function cyber(){
        return view('courses/cyber');
    }

    public function cyberNotes(){ 
        

        $pdf =PDF::loadView('courses/cyberpdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('cyber.pdf'); 
    }

//web design
    public function design(){
        return view('courses/design');
    }

    public function designReport(){ 
        

        $pdf = PDF::loadView('courses/dpdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('design.pdf'); 
    }
    //software development
    public function software(){
        return view('courses/software');
    }

    public function softwareNotes(){ 
        

        $pdf = PDF::loadView('courses/softwarepdf')->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('software.pdf'); 
    }
}
