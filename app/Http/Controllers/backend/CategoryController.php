<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $data=DB::table('categories')->get();
        return view('backend.category.index',compact('data'));
    }

    public function store(Request $request)
    {
    	  $validatedData = $request->validate([
              'category_en' => 'required|unique:categories|max:55',
              'category_bn' => 'required|unique:categories|max:55',
           ]);

    	  $data=array();
    	  $data['category_en']=$request->category_en;
    	  $data['category_bn']=$request->category_bn;
    	  DB::table('categories')->insert($data);

    	     $notification=array(
                        'messege'=>'Successfully category Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully category deleted',
            'alert-type'=>'error',
             );
       return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
              $validatedData = $request->validate([
              'category_en' => 'required|max:55',
              'category_bn' => 'required|max:55',
           ]);

          $data=array();
          $data['category_en']=$request->category_en;
          $data['category_bn']=$request->category_bn;
          DB::table('categories')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('category_index')->with($notification);

    }
}
