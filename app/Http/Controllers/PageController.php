<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->input('name');
        $checkbox1 = $request->input('checkbox1');
        $checkbox2 = $request->input('checkbox2');
        $radio = $request->input('radio');
        $hidden = $request->input('hidden');

        // return "Name-".$name."<br>"."Like-"."<br>".$checkbox1."<br>".$checkbox2."<br>"."ID-".$hidden."<br>"."Sex-".$radio."<br>";
        $array = [
            "NAME" => $name ,
            "ID"   => $hidden ,
            "GEN"  => $radio ,
            "LIKE" => $checkbox1.$checkbox2
        ]; 
        return view('page.page1',$array);

        
    }
    #show_select
    public function show_select(Request $res){
        return view('page.page12',$res);
    }// end function show_select
}//end class