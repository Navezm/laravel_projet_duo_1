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

    public function home(){
        $BulletHome = HomeFirstBullet::all();
        $BulletAbout = HomeSecondBullet::all();
        return view('pages.bo.home', compact('BulletHome', 'BulletAbout'));
    }

    public function storeHome(Request $requests){
        $newEntry = new HomeFirstBullet();
        $newEntry->bullet = $requests->bullet;

        $newEntry->save();
        return redirect()->back();
    }

    public function storeAbout(Request $requests){
        $newEntry = new HomeSecondBullet();
        $newEntry->bullet = $requests->bullet;

        $newEntry->save();
        return redirect()->back();
    }

    public function nav(){
        $NavLink = NavLink::all();
        return view('pages.bo.nav', compact('NavLink'));
    }

    public function storeNav(Request $requests){
        $newEntry = new NavLink();
        $newEntry->link = $requests->link;

        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id){
        $destroy = NavLink::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function destroy2($id){
        $destroy = HomeFirstBullet::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function destroy3($id){
        $destroy = HomeSecondBullet::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}