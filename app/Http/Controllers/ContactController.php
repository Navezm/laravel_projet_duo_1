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
        $editPath = '/edit-address/';
        $values = false;
        return view('pages.bo.contact.addresses',compact('infos','pageTitle','storePath','deletePath','editPath','values'));
    }

    public function storeAddress(Request $requests){

        $validated = $requests->validate([
            'info' => 'required|max:300',
        ]);

        $newEntry = new ContactAddress;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }

    public function editAddress($id) 
    {   
        $info = ContactAddress::find($id);
        $storePath = '/update-address/'.$info->id;
        $values = true;
        return view('pages.bo.contact.edit', compact('storePath','info','values'));
    }

    public function updateAddress(Request $requests, $id){

        $validated = $requests->validate([
            'info' => 'required|max:300',
        ]);

        $update = ContactAddress::find($id);
        $update->info = $requests->info;

        $update->save();
        return redirect('/bo/addresses');
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
        $editPath = '/edit-email/';
        $values = false;
        return view('pages.bo.contact.emails',compact('infos','pageTitle','storePath','deletePath','editPath','values'));
    }

    public function storeEmail(Request $requests){

        $validated = $requests->validate([
            'info' => 'required|max:100',
        ]);

        $newEntry = new ContactEmail;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }

    public function editEmail($id) 
    {   
        $info = ContactEmail::find($id);
        $storePath = '/update-email/'.$info->id;
        $values = true;
        return view('pages.bo.contact.edit', compact('storePath','info','values'));
    }

    public function updateEmail(Request $requests, $id){

        $validated = $requests->validate([
            'info' => 'required|max:100',
        ]);

        $update = ContactEmail::find($id);
        $update->info = $requests->info;

        $update->save();
        return redirect('/bo/emails');
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
        $editPath = '/edit-phone/';
        $values = false;
        return view('pages.bo.contact.phones',compact('infos','pageTitle','storePath','deletePath','editPath','values'));
    }

    public function storePhone(Request $requests){

        $validated = $requests->validate([
            'info' => 'required|max:30',
        ]);


        $newEntry = new ContactPhone;
        $newEntry->info = $requests->info;

        $newEntry->save();
        return redirect()->back();
    }

    public function editPhone($id) 
    {   
        $info = ContactPhone::find($id);
        $storePath = '/update-phone/'.$info->id;
        $values = true;
        return view('pages.bo.contact.edit', compact('storePath','info','values'));
    }

    public function updatePhone(Request $requests, $id){

        $validated = $requests->validate([
            'info' => 'required|max:30',
        ]);


        $update = ContactPhone::find($id);
        $update->info = $requests->info;

        $update->save();
        return redirect('/bo/phones');
    }

    public function destroyPhone($id){
        $destroy = ContactPhone::find($id);
        $destroy->delete();
        
        return redirect()->back();
    }

    public function editPageContent() 
    {
        $pageContent = Contact::first();
        $pageContentForms = Form::all();
        $cards = ContactCard::all();
        return view('pages.bo.contact.pageContent', compact('pageContent','pageContentForms','cards'));
    }

    public function updatePageContent(Request $request) 
    {

        $validated = $request->validateWithBag('pg',[
            'title1' => 'required|max:30',
            'p' => 'required|max:1000',
            'loading' => 'required|max:50',
            'sent' => 'required|max:100',
            'btn' => 'required|max:30',
        ]);


        $pageContent = Contact::first();
        $pageContent->title1 = $request->title1;
        $pageContent->p = $request->p;
        $pageContent->loading = $request->loading;
        $pageContent->sent = $request->sent;
        $pageContent->btn = $request->btn;

        $pageContent->save();

        return redirect()->back();
    }

    public function updatePageContentForm(Request $request, $id) 
    {
        $validated = $request->validateWithBag('form',[
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'subject' => 'required|max:50',
            'message' => 'required|max:3000',
        ]);

        $pageContentForm = Form::find($id);
        $pageContentForm->name = $request->name;
        $pageContentForm->email = $request->email;
        $pageContentForm->subject = $request->subject;
        $pageContentForm->message = $request->message;

        $pageContentForm->save();

        return redirect()->back();
    }

    public function updatePageContentCards(Request $request, $id) 
    {

        $validated = $request->validateWithBag('cards',[
            'icon' => 'required|max:30',
            'subtitle' => 'required|max:50',
        ]);

        $pageContentCard = ContactCard::find($id);
        $pageContentCard->icon = $request->icon;
        $pageContentCard->subtitle = $request->subtitle;

        $pageContentCard->save();

        return redirect()->back();
    }

    
}
