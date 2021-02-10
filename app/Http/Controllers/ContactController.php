<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactAddress;
use App\Models\ContactCard;
use App\Models\ContactEmail;
use App\Models\ContactPhone;
use App\Models\FooterButton;
use App\Models\Form;
use App\Models\NavFooter;
use App\Models\NavLink;
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
        $FooterBtn = FooterButton::all();
        $NavLink = NavLink::all();
        $DBnav = NavFooter::all();
        $paragraph1 = explode('/', $DBnav[0]->copyright);
        $paragraph2 = explode('/', $DBnav[0]->credits);
        
        // dd($cards);
        return view('pages.contact',compact('placeHolders','datamsgs','contacts','cards','DBnav','paragraph1',"paragraph2",'infos', 'NavLink', 'FooterBtn'));
    }
    
    public function address (){
        $infos = ContactAddress::all();
        $pageTitle = 'Addresses';
        $storePath = '/add-address';
        $deletePath = '/delete-address/';
        return view('pages.bo.contact.addresses',compact('infos','pageTitle','storePath','deletePath'));
    }

    public function storeAddress(Request $requests){
        $newEntry = new ContactAddress;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }
    public function destroyAddress($id){
        $destroy = ContactAddress::find($id);
        $destroy->delete();

        return redirect()->back();
    }


    public function email (){
        $infos = ContactEmail::all();
        $pageTitle = 'Emails';
        $storePath = '/add-email';
        $deletePath = '/delete-email/';
        return view('pages.bo.contact.emails',compact('infos','pageTitle','storePath','deletePath'));
    }

    public function storeEmail(Request $requests){
        $newEntry = new ContactEmail;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }
    public function destroyEmail($id){
        $destroy = ContactEmail::find($id);
        $destroy->delete();
        
        return redirect()->back();
    }

    public function phone (){
        $infos = ContactPhone::all();
        $pageTitle = 'Phone numbers';
        $storePath = '/add-phone';
        $deletePath = '/delete-phone/';
        return view('pages.bo.contact.phones',compact('infos','pageTitle','storePath','deletePath'));
    }

    public function storePhone(Request $requests){
        $newEntry = new ContactPhone;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }

    public function destroyPhone($id){
        $destroy = ContactPhone::find($id);
        $destroy->delete();
        
        return redirect()->back();
    }
}
