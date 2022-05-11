<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usermanage extends Controller
{
    public function list()
    {
        $user_list=DB::table('users')->where('role','=','2')->get();
        return view('admin.pages.userlist',compact('user_list'));
    }

    public function delete($id)
    {
        $user_dlt=DB::table('users')->where('id',$id)->delete();
        return redirect('/users/list');
    }
}
