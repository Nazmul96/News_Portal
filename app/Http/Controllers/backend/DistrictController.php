<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $division=DB::table('divisions')->get();
        $district=DB::table('districts')->Join('divisions','districts.division_id','divisions.id')->select('divisions.division_en','districts.*')->get();
        return view('backend.districts.index',compact('division','district'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'district_en' => 'required|unique:districts|max:55',
            'district_bn' => 'required|unique:districts|max:55',
            'division_id' => 'required',
         ]);

        $data=array();
        $data['district_en']=$request->district_en;
        $data['district_bn']=$request->district_bn;
        $data['division_id']=$request->division_id;
        DB::table('districts')->insert($data);
           $notification=array(
                      'messege'=>'Successfully Added',
                      'alert-type'=>'success'
                       );
          return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        DB::table('districts')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully district deleted',
            'alert-type'=>'error',
             );
       return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $district=DB::table('districts')->where('id',$id)->first();
        $division=DB::table('divisions')->get();
        return view('backend.districts.edit',compact('district','division'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'district_en' => 'required|max:55',
            'district_bn' => 'required|max:55',
            'division_id' => 'required',
         ]);

        $data=array();
        $data['district_en']=$request->district_en;
        $data['district_bn']=$request->district_bn;
        $data['division_id']=$request->division_id;
        DB::table('districts')->where('id',$id)->update($data);
           $notification=array(
                      'messege'=>'Successfully district updated',
                      'alert-type'=>'success'
                       );
          return redirect()->route('district_index')->with($notification);
    }
}
