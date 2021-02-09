<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\NavFooter;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        
        return view('pages.article',compact('articles','DBnav','paragraph1','paragraph2'));
    }

    public function create (){
        $articles = Article::all();
        return view('pages.bo.articles.articles',compact('articles'));
    }
}
