<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $data=DB::table('divisions')->get();
        return view('backend.division.index',compact('data'));
    }

    public function store(Request $request)
    {
    	  $validatedData = $request->validate([
              'division_en' => 'required|unique:divisions|max:55',
              'division_en' => 'required|unique:divisions|max:55',
           ]);

    	  $data=array();
    	  $data['division_en']=$request->division_en;
    	  $data['division_bn']=$request->division_bn;
    	  DB::table('divisions')->insert($data);

    	     $notification=array(
                        'messege'=>'Successfully district Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        DB::table('divisions')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully division deleted',
            'alert-type'=>'error',
             );
       return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $data=DB::table('divisions')->where('id',$id)->first();
        return view('backend.division.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'division_en' => 'required|max:55',
            'division_en' => 'required|max:55',
         ]);

          $data=array();
    	  $data['division_en']=$request->division_en;
    	  $data['division_bn']=$request->division_bn;
          DB::table('divisions')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('division_index')->with($notification);

    }

}
