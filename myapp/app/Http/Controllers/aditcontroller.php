<?php

namespace App\Http\Controllers;

use App\Models\aditstudent;
use Illuminate\Http\Request;

class aditcontroller extends Controller
{
    //
    function storeAditData(Request $req){

      $aditformdata=new aditstudent();
      $aditformdata->name=$req['name'];
      $aditformdata->email=$req['email'];
      $aditformdata->pincode=$req['pincode'];
      $aditformdata->state=$req['state'];
      $aditformdata->password=md5($req['password']);
      $aditformdata->save();
      return ("<h1>Data Saved Successfully</h1>");
      
      

    }
}
