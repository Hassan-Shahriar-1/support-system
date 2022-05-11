<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class operatormanage extends Controller
{
    public function add()
    {
        return view('admin.pages.operatorform');

    }


    public function post(Request $request)
    {
        $data=array();  
        $data['role']='3';
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $into=DB::table('users')->insert($data);
        return redirect('/operator/list');

    }

    public function list()
    {
        $list=DB::table('users')->where('role','=','3')->get();
        return view ('admin.pages.operatorlist',compact('list'));
    }

    public function delete_operator()
    {
        $op_dlt=DB::table('users')->where('id',$id)->delete();
    }

    public function operator_details()
    {

    }
    
}
