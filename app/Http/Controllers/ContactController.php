<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactAddress;
use App\Models\ContactCard;
use App\Models\ContactEmail;
use App\Models\ContactPhone;
use App\Models\Form;
use App\Models\NavFooter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (){

        $contacts = Contact::all();
        $cards = ContactCard::all();
        $addresses = ContactAddress::all();
        $emails = ContactEmail::all();
        $phones = ContactPhone::all();
        $infos = [$addresses,$emails,$phones];


        $forms = Form::all();
        $placeHolders = $forms[0];
        $datamsgs = $forms[1];


        // navfooter
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);

        // dd($cards);
        return view('pages.contact',compact('placeHolders','datamsgs','contacts','cards','DBnav','paragraph1',"paragraph2",'infos'));
    }

    public function address (){
        $addresses = ContactAddress::all();
        return view('pages.bo.contact.addresses',compact('addresses'));
    }
    public function email (){
        $emails = ContactEmail::all();
        return view('pages.bo.contact.emails',compact('emails'));
    }
    public function phone (){
        $phones = ContactPhone::all();
        return view('pages.bo.contact.phones',compact('phones'));
    }
}
