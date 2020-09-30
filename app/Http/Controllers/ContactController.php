<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {

    public function submit(ContactRequest $req) {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено.');
    }


    public function allData() {

        // вариант 1  =============
        // $contact = new Contact;
        // dd($contact->all());
        
        // вариант 2  =============        
        // $contact = Contact::all();
        // dd($contact);

        // вариант 3  =============        
        // $contact = new Contact;
        // return view('messages', ['data' => $contact->orderBy('id', 'asc')->get()]);
                
        // вариант 4  =============        
        $contact = new Contact;
        return view('messages', ['data' => $contact->all() ] );
    }
    
    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {
        $contact = Contact::all()->find($id);
        
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено.');
    }


}