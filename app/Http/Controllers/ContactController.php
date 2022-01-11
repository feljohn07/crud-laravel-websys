<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    // Return the index.blade.php with the contacts table data.
    public function index(){
        // Get all of the models from the database.
        $contacts = Contact::all();
        return view ('contacts.index')->with('contacts', $contacts);
    }

    // URL: /contact/create => retuns the view create.blade.php
    public function create(){
        return view('contacts.create');
    }

   
    public function store(Request $request){
        $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  
    }

    
    public function show($id){
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    
    public function edit($id){
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

  
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id){
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }

    // Returns the members.blade.php to the user
    public function members(){
        return view('contacts.members');
    }
}