<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\articlePageContent;
use App\Models\FooterButton;
use App\Models\NavFooter;
use App\Models\NavLink;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        $title = articlePageContent::first();

        $FooterBtn = FooterButton::all();
        $NavLink = NavLink::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        
        return view('pages.article',compact('title','articles','DBnav','paragraph1','paragraph2', 'NavLink', 'FooterBtn'));
    }

    public function create (){
        $articles = Article::all();
        $values = false;
        return view('pages.bo.articles.articles',compact('articles','values'));
    }

    public function store(Request $requests){
        $newEntry = new Article;
        $newEntry->title = $requests->title;
        $newEntry->subtitle = $requests->subtitle;
        $newEntry->preview = $requests->preview;

        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id){
        $destroy = Article::find($id);
        $destroy->delete();
        
        return redirect('/bo/articles');
    }

    public function edit($id) 
    {
        $article = Article::find($id);
        $values = true;
        return view('pages.bo.articles.edit', compact('article','values'));
    }

    public function update(Request $requests, $id){
        $update = Article::find($id);
        $update->title = $requests->title;
        $update->subtitle = $requests->subtitle;
        $update->preview = $requests->preview;

        $update->save();
        return redirect('/article-show/'.$update->id);
    }

    public function show($id)
    {
        $show = Article::find($id);
        return view('pages.bo.articles.show', compact('show'));
    }
}
