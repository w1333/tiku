<?php

namespace App\Http\Controllers\home;

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
        return view("venue/list");
    }

    public function choice()
    {
        return view("venue/choice");
    }

}
