<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessageController extends Controller
{
    public function index($id)
    {
        $tknid=DB::table('tickets')->where('id',$id)->first();
       
        $msglist=DB::table('tickets')->join('messages','tickets.id','=','messages.tkt')->select('messages.*','tickets.*')->where('messages.tkt',$id)->get();
        if($msglist){
            
       return view('users.pages.chat',compact('msglist','tknid')); }
        else{
            return 'null';
        }
    }
    public function sendmsg(Request $req,$id)
    {
        $data=array();
        $data['msg']=$req->msg;
        $data['uid']=Auth::user()->id;
      
        $in=DB::table('messages')->insert($data);
    }
}
