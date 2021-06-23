<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class StaffController extends Controller
{
     public function viewStaff(){
        return view('admin.staff');
     }
 
}
