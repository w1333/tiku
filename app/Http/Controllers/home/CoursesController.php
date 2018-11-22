<?php

namespace App\Http\Controllers\home;

use App\Courses;
use App\Lunbo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    //
    public function index(){
        $courses = Courses::all();
        $lunbo = Lunbo::all();
        return view("venue/index",compact("courses","lunbo"));
    }

    public function list($id){
        $courses = Courses::find($id);
        return view('venue/list',compact('courses'));
    }
}
