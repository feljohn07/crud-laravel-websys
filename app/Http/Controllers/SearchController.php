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
            where lower(name) like any (array['%johns%', '%fel%', '%bang-asan%'])
            or lower(address) like any (array['%johns%', '%fel%', '%bang-asan%']);

            */
            
            $appointment = DB::table('appointment')

                // BY KEYWORD SEARCH (WIDER SEARCH)
                ->whereRaw("LOWER(firstname) LIKE any ".$search_text)
                ->orWhereRaw("LOWER(lastname) LIKE any".$search_text)

                // FULL SEARCH (ACCURATE)
                // ->whereRaw("CONCAT(LOWER(firstname), ' ', LOWER(lastname)) = '".strtolower($_GET['query'])."'")
                // ->toSql();
                ->paginate(5);
                

            return view('appointment.search')->with(array('appointment' => $appointment, 'query' => $_GET['query']));


        }else{

            return view('appointment.index');
        }  
    }
}