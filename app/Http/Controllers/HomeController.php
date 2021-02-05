<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\NavFooter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $DBhome = Home::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        return view('welcome', compact('DBhome', 'DBnav', 'paragraph1', 'paragraph2'));
    }
}