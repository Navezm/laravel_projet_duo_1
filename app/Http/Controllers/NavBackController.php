<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\NavFooter;
use Illuminate\Http\Request;

class NavBackController extends Controller
{
    public function back(){
        $DBhome = Home::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        return view('pages.navBack', compact('DBhome', 'DBnav', 'paragraph1', 'paragraph2'));
    }
}
