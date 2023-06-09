<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentmodel extends Controller
{
    //
    function getStudentdata(){
        $mydata = student::all();
        return view('studentinfo',['ourdata'=>$mydata]);
    }
}
