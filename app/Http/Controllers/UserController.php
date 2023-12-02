<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function add(Request $req){
        $add = new User;
        $add->nama=$req->nama;
        $add->alamat=$req->alamat;
        $add->email=$req->email;
        $add->no_sim=$req->no_sim;
        $add->no_hp=$req->no_hp;
        $add->password=$req->password;
        $add->role_id=1;
        
        
        $result = $add->save();
      
        if($result){
      
          return ["Result"=>"User created"];
        }else{
          return ["Result"=>"Error"];
      
        }
      
       }
}
