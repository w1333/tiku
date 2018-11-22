<?php

namespace App\Http\Controllers\home;

use App\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view("venue/index");
    }

    public function list()
    {
        $courses=Courses::all();
        return view("venue/list",compact('courses'));
    }

    public function choice()
    {
        return view("venue/choice");
    }

}
