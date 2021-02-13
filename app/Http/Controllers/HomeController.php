<?php

namespace App\Http\Controllers;

use App\Models\FooterButton;
use App\Models\Home;
use App\Models\HomeParagraph;
use App\Models\HomeFirstBullet;
use App\Models\HomeSecondBullet;
use App\Models\NavFooter;
use App\Models\NavLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $DBhome = Home::all();
        $DBparagraph = HomeParagraph::all();
        $BulletHome = HomeFirstBullet::all();
        $BulletAbout = HomeSecondBullet::all();

        $FooterBtn = FooterButton::all();
        $NavLink = NavLink::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        return view('welcome', compact('DBhome', 'DBparagraph', 'DBnav', 'paragraph1', 'paragraph2', 'NavLink', 'FooterBtn', 'BulletHome', 'BulletAbout'));
    }

    public function home(){
        $BulletHome = HomeFirstBullet::all();
        $BulletAbout = HomeSecondBullet::all();
        return view('pages.bo.home.home', compact('BulletHome', 'BulletAbout'));
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

    public function edit($id)
    {
        $show = NavLink::find($id);
        return view('pages.bo.navEdit', compact('show'));
    }

    public function edit2($id)
    {
        $show = HomeFirstBullet::find($id);
        return view('pages.bo.home.homeEdit', compact('show'));
    }

    public function edit3($id)
    {
        $show = HomeSecondBullet::find($id);
        return view('pages.bo.home.aboutEdit', compact('show'));
    }

    public function update($id, Request $request)
    {
        $update = NavLink::find($id);
        $update->link = $request->link;
        $update->save();
        return redirect()->back();
    }

    public function update2($id, Request $request)
    {
        $update = HomeFirstBullet::find($id);
        $update->bullet = $request->bullet;
        $update->save();
        return redirect()->back();
    }

    public function update3($id, Request $request)
    {
        $update = HomeSecondBullet::find($id);
        $update->bullet = $request->bullet;
        $update->save();
        return redirect()->back();
    }

    public function editContent()
    {
        $DBhome = Home::all();
        return view('pages.bo.home.pageContent', compact('DBhome'));
    }

    public function updateContent(Request $request)
    {
        $DBhome = Home::first();
        $DBhome->title = $request->title;
        $DBhome->subtitle = $request->subtitle;
        $DBhome->btn1 = $request->btn1;
        $DBhome->btn2 = $request->btn2;
        $DBhome->save();
        return redirect()->back();
    }

    public function showParagraph()
    {
        $DBparagraph = HomeParagraph::all();
        return view('pages.bo.home.paragraphContent', compact('DBparagraph'));
    }
    
    public function editParagraph($id)
    {
        $DBparagraph = HomeParagraph::find($id);
        return view('pages.bo.home.paragraphEdit', compact('DBparagraph'));
    }

    public function updateParagraph($id, Request $request)
    {
        $DBparagraph = HomeParagraph::find($id);
        $DBparagraph->paragraph = $request->paragraph;
        $DBparagraph->save();
        return redirect()->back();
    }
}