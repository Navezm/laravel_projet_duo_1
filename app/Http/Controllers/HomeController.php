<?php

namespace App\Http\Controllers;

use App\Models\FooterButton;
use App\Models\Home;
use App\Models\HomeFirstBullet;
use App\Models\HomeSecondBullet;
use App\Models\NavFooter;
use App\Models\NavLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $DBhome = Home::all();
        $BulletHome = HomeFirstBullet::all();
        $BulletAbout = HomeSecondBullet::all();

        $FooterBtn = FooterButton::all();
        $NavLink = NavLink::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        return view('welcome', compact('DBhome', 'DBnav', 'paragraph1', 'paragraph2', 'NavLink', 'FooterBtn', 'BulletHome', 'BulletAbout'));
    }
}