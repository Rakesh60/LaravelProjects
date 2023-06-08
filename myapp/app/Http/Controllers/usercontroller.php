<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function show($id){

        return "<h1>You are in Controller Mode $id</h1>";
      }
}
