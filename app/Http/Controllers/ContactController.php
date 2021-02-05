<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Form;
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

        // dd($cards);
        return view('pages.contact',compact('general','placeHolders','datamsgs','cards'));
    }
}
