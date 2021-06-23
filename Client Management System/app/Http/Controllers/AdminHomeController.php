<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
     public function viewHome(){
        return view('admin.home');
     }
   //   public function index(){
   //    return redirect('/index');
   // }
 
}
