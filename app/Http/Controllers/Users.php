<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    function front(){
        return view('front');
    }
    function list(){
        return view('userlist');
    }
    function create(){
        return view('create');
    }
    function about(){
        return view('about');
    }
    function links(){
        return view('links');
    }
    function loginsubmit(Request $req){
        //check whether the database is working or not
         User::select('name')->where(
             [['email','=',$req->email],
             ['password','=',$req->password]]
         )->get();
        //create session for login.
        $req->session()->put('logData',[$req->input()]);
        return redirect('/about');
        //print_r($req->input());
    }
    public function createsubmit(Request $req){
         $user = new User;
         $user->name=$req->name;
         $user->email=$req->email;
         $user->password=$req->password;
         $result = $user->save();
        if($result){
            return redirect('/');
        }
    }
}
