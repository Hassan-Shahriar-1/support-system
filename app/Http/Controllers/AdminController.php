<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.pages.dashboard');
    }

    public function msgcheck_tkt()
    {

    }

  

   

 

    public function update_game()
    {

    }

    public function post_game()
    {

    }

    public function user_list()
    {
        $usr_list=DB::table('users')->where('role','=','1')->get();
        return view('admin.pages.userlist',compact('usr_list'));
    }

    

}
