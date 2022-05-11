<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function tokenform()
    {   $gm_list=DB::table('gamelists')->get();
        $category=DB::table('categories')->get();
        return view('users.pages.tokenform',compact('gm_list','category'));
    }

    public function token_submit(Request $request)
    {   
        
        $token=array();
        $token['id']=Str::uuid()->toString();
        $token['title']=$request->title;
        $token['gameid']=$request->gameid;
        $token['category']=$request->category;
        $token['user_id']=Auth::user()->id;
        $token['created_at']=new \DateTime;
         
        $sumit_token=DB::table('tickets')->insert($token);
            return redirect('/user/tokenlist/');
           
    }

    public function token_list()
    {
       $uid=Auth::user()->id;
       $list=DB::table('gamelists')->join('tickets','gamelists.id','=','tickets.gameid')->where('user_id','=',$uid)->paginate(2);
       return view('users.pages.tokenlist',compact('list'));
       
        
    }

    public function token_solve(Request $request,$id)
    {
        $updt=array();
        $updt['status']=1;
        $updt['updated_at']=new \DateTime();
        $update=DB::table('tickets')->where('id',$id)->update($updt);
    }
}
