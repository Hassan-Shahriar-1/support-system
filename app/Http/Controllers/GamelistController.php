<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Image;

class GamelistController extends Controller
{
    public function form()
    {
        $gmlist=DB::table('gamelists')->get();
        return view('admin.pages.gameform',compact('gmlist'));
    }

    public  function post(Request $request)
    {
       $data=array();
       $data['name']=$request->name;
       $data['created_at']=new \DateTime();
       $file=$request->file('icon');
       $image_name=uniqid();
       $ext=strtolower($file->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='images/game/icon/';
       $img_url=$upload_path.$image_full_name;
       $img = Image::make($file->getRealPath());
      $img->resize(35,35,function ($constraint) {
        $constraint->aspectRatio();
    });
       $succes=$img->save($upload_path.$image_full_name,100);
       $data['icon']=$img_url;
       
       $into=DB::table('gamelists')->insert($data);
       return redirect('/admin/add/game');
    }

    

    public function edit($id)
    {
        $gmlist=DB::table('gamelists')->get();
        $edt=DB::table('gamelists')->where('id',$id)->first();
        return view('admin.pages.editgame',compact('edt','gmlist'));
    }

    public function update(Request $request,$id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['updated_at']=new \DateTime();
        $file=$request->file('icon');
        if($file)
        {
            $image=DB::table('gamelists')->where('id',$id)->first();
            $imgs=$image->icon;
            unlink($imgs);
            $image_name=uniqid();
            $ext=strtolower($file->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='images/game/icon/';
            $img_url=$upload_path.$image_full_name;
            $img = Image::make($file->getRealPath());
            $img->resize(35,35,function ($constraint) {
                $constraint->aspectRatio();
            });
            $succes=$img->save($upload_path.$image_full_name);
            $data['icon']=$img_url;
            
            $into=DB::table('gamelists')->where('id',$id)->update($data);
            return redirect('/admin/add/game');
        }

        else{
            $updt=DB::table('gamelists')->where('id',$id)->update($data);
            return redirect('/admin/add/game');
        }

        

    }


    public function delete($id)
    {
        $image=DB::table('gamelists')->where('id',$id)->first();
        $img=$image->icon;
        $dlt=DB::table('gamelists')->where('id',$id)->delete();
        unlink($img);
        return redirect('/admin/add/game');
    }

}
