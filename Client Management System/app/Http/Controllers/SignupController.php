<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
     public function viewSignup(){
        return view("admin.signup");
     }

     public function signup(Request $req){
        $validation = Validator :: make ($req->all(),[
            'name' => 'min:3|max:30',
            'email' => 'required|email|min:10|max:49',
            'pass'  => 'required|alpha_num|min:8|max:20|confirmed'
            
        ]);
  
        if($validation->fails()){
            return back()->with('errors',$validation->errors());
        }
        else{
  
           $user = new User;
        $user->username     = $req->username; 
        $user->email         = $req->email; 
        $user->password     = $req->password; 
        $user->type         =  $req->type;
        
        $user->save();
  
        return redirect('admin.login');
        }
  }
}
