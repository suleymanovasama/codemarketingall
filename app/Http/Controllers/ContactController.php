<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
    $contacts = Contact::get();
    return view('admin.pages.contact.index',compact('contacts'));
    }
    public function view($id){
        $contact = Contact::find($id);
        return view('admin.pages.contact.view',compact('contact'));
    }
    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('danger','Mesaj Silindi');
    }

}
