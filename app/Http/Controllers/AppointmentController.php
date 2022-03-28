<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Retreive Data From the Table and return it to the index.blade.php
    public function index()
    {
        $appointments = Appointment::latest()->paginate(5);
        return view('appointment.index', compact('appointments'));
    }

    // URL: /appointment/create => retuns the view create.blade.php
    public function create(){
        return view('appointment.create');
    }

    // store the values inputted at create.blade.php
    public function store(Request $request){
        $input = $request->all();
        Appointment::create($input);
        return redirect('appointment')->with('flash_message', 'Appointment Added!');  
    }

    // Show the value of the requested id after clicking view button of the index.blade.php
    public function show($id){
        $appointments = Appointment::find($id);
        return view('appointment.show')->with('appointments', $appointments);
    }

    // Open the edit.blade.php with the id that the user wants to edit and display the data on the textfield.
    public function edit($id){
        $appointments = Appointment::find($id);
        return view('appointment.edit')->with('appointments', $appointments);
    }

    // Updates the columns after editing the data.
    public function update(Request $request, $id){
        $appointments = Appointment::find($id);
        $input = $request->all();
        $appointments->update($input);
        return redirect('appointment');  
    }

    // Delete a row on the table.
    public function destroy($id){
        Appointment::destroy($id);
        return redirect('appointment');  
    }
}
