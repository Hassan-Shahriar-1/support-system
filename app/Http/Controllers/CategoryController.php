<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $cat_list=DB::table('categories')->get();
        return view('admin.pages.category',compact('cat_list'));
    }


    public function cat_insert(Request $request)
    {
        $cat=array();
        $cat['name']=$request->name;
        $cat_insert=DB::table('categories')->insert($cat);
        return redirect('/admin/category');

    }

    public function edit($id)
    {
        $cat_list=DB::table('categories')->get();
        $edt=DB::table('categories')->where('id',$id)->first();
        return view('admin.pages.editcategory',compact('edt','cat_list'));
    }

    public function update_cat(Request $request,$id)
    {
        $update=array();
        $update['name']=$request->name;
        $cat_updt=DB::table('categories')->where('id',$id)->update($update);
        return redirect('/admin/category');
    }

    public function delete($id)
    {
        $cat_dlt=DB::table('categories')->where('id',$id)->delete();
        return redirect('/admin/category');
    }
}
