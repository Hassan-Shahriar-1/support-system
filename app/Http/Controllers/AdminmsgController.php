<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class AdminmsgController extends Controller
{
    public function operator_msg(Request $request, $id)
    {
        $data=array();
        $data['body']=$request->body;
        $data['Rid']=$id;
        $data['created_at']=new \DateTime();
        $msg_insert=DB::table('adminmsgs')->insert($data);
        return redirect('/admin/msglist');
        
    }

    public function list(){
        $msg_list=DB::table('users')->join('adminmsgs','users.id','=','adminmsgs.Rid')->select('adminmsgs.*','users.name','users.email')->get();
        return view('admin.pages.adminmsglist',compact('msg_list'));
    }
    public function delete($id)
    {
        $msg_dlt=DB::table('adminmsgs')->where('id',$id)->delete();
        return redirect('/admin/msglist');
    }
}
