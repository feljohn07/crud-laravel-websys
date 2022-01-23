<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller{
    function search(Request $request){

        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $contact = DB::table('contacts')->where('name', 'LIKE', '%'.$search_text.'%')->paginate(2);
            return view('contacts.search')->with('contacts', $contact);;

        }else{

            return view('contacts.index');
        }  
    }
}