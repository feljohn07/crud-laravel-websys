<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller{
    function search(Request $request){

        if(isset($_GET['query'])){

            // make input to lowercase, then split it and store as an array
            $text = explode(" ", strtolower($_GET['query']));

            // create multiple array string that holds the customized array for postgres query.
            $search_text = "(array[";
            $last = count($text);

            foreach($text as $value){

                if($last > 1){
                    $search_text .= "'%".$value."%',";
                    $last--;
                }else{
                    $search_text .= "'%".$value."%'";
                } 
            }

            $search_text .= "])";

            /* QUERY OUPUT LAYOUT

            select * from contacts 
            where lower(name) like any (array['%johns%'])
            or lower(address) like any (array['%johns%', '%fel%', '%bang-asan%']);

            */
            
            $contact = DB::table('contacts')
                ->whereRaw("LOWER(name) LIKE any ".$search_text)
                ->orWhereRaw("LOWER(address) LIKE any".$search_text)
                // ->toSql();
                ->paginate(5);

            return view('contacts.search')->with('contacts', $contact);

            // return $search_text . $last;

        }else{

            return view('contacts.index');
        }  
    }
}