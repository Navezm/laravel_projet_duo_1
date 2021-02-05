<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Form;
use App\Models\NavFooter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (){
        $contacts = Contact::all();
        $forms = Form::all();
        $general = $contacts[0];
        $cards = [$contacts[1],$contacts[2],$contacts[3]];
        $placeHolders = $forms[0];
        $datamsgs = $forms[1];

        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);

        // dd($cards);
        return view('pages.contact',compact('general','placeHolders','datamsgs','cards','DBnav','paragraph1',"paragraph2"));
    }
}
