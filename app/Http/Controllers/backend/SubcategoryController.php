<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $category=DB::table('categories')->get();
        $subcat=DB::table('subcategories')->Join('categories','subcategories.category_id','categories.id')->select('categories.category_en','subcategories.*')->get();
        return view('backend.subcategory.index',compact('category','subcat'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subcategory_en' => 'required|unique:subcategories|max:55',
            'subcategory_bn' => 'required|unique:subcategories|max:55',
            'category_id' => 'required',
         ]);

        $data=array();
        $data['subcategory_en']=$request->subcategory_en;
        $data['subcategory_bn']=$request->subcategory_bn;
        $data['category_id']=$request->category_id;
        DB::table('subcategories')->insert($data);
           $notification=array(
                      'messege'=>'Successfully Added',
                      'alert-type'=>'success'
                       );
          return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        DB::table('subcategories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully subcategory deleted',
            'alert-type'=>'error',
             );
       return redirect()->back()->with($notification);
    }

    public function edit($id){
        $subcategory=DB::table('subcategories')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('backend.subcategory.edit',compact('subcategory','category'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'subcategory_en' => 'required|max:55',
            'subcategory_bn' => 'required|max:55',
            'category_id' => 'required',
         ]);

         $data=array();
        $data['subcategory_en']=$request->subcategory_en;
        $data['subcategory_bn']=$request->subcategory_bn;
        $data['category_id']=$request->category_id;
        DB::table('subcategories')->where('id',$id)->update($data);
           $notification=array(
                      'messege'=>'Successfully subcategory updated',
                      'alert-type'=>'success'
                       );
          return redirect()->route('subcategory_index')->with($notification);
    }

}
