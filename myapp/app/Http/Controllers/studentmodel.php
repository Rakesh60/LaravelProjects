<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentmodel extends Controller
{
    //
    function getStudentdata(){
        return student::all();
    }
}
