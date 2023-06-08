<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    //
    function index(){
       $data= DB::select("Select * from students"); 
       echo "<pre>"; 
       print_r($data);
       echo "</ pre>";
    }
}
