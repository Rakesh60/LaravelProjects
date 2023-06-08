<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class userformcontroller extends Controller
{
    //
    function savedata(Request $req){
        $req->validate(['username'=>'required',
                        'password'=>'required']
                        
    );

       // return $req->input();
    //    echo "<pre>";
    //    print_r($req->all());
       $logindata=new login();
       $logindata->username=$req['username'];
       $logindata->password=md5($req['password']);
       $logindata->save();
       return view("success",['success']);
    }
}
