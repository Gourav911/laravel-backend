<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
    
class UserControler extends Controller
{
    function login(Request $req ){
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "invalid email or password";
        }
       else{
        $req->session()->put('user',$user);
        return redirect('/');
          
       }
    }
}
