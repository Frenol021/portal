<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function program(){
        return view('courses/graphic');
    }

    public function mobile(){
        return view('courses/mobile');
    }

    public function data(){
        return view('courses/data');
    }

    public function cyber(){
        return view('courses/cyber');
    }

    public function design(){
        return view('courses/design');
    }
    public function software(){
        return view('courses/software');
    }
}
