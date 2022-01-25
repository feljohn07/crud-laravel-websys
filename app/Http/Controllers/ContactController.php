<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    // Return the index.blade.php with the contacts table data.
    public function index(){
        // Get all of the models from the database.
        $contacts = Contact::latest()->paginate(5);
        return view ('contacts.index', compact('contacts'));
    }


    // URL: /contact/create => retuns the view create.blade.php
    public function create(){
        return view('contacts.create');
    }


    // store the values inputted at create.blade.php
    public function store(Request $request){
        $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  
    }


    // Show the value of the requested id after clicking view button of the index.blade.php
    public function show($id){
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    
    // Open the edit.blade.php with the id that the user wants to edit and display the data on the textfield.
    public function edit($id){
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

    // Updates the columns after editing the data.
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

    // Delete a row on the table.
    public function destroy($id){
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }

}