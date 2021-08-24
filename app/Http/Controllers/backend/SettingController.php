<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Social Setting-------

    public function social_setting()
    {
        $social=DB::table('socials')->first();
    	 return view('backend.settings.social',compact('social'));
    }

    public function social_update(Request $request,$id)
    {
          $data=array();
          $data['facebook']=$request->facebook;
          $data['twitter']=$request->twitter;
          $data['linkedin']=$request->linkedin;
          $data['instagram']=$request->instagram;
          $data['youtube']=$request->youtube;
          DB::table('socials')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //SEO Setting-------

    public function seo_setting()
    {
        $seo=DB::table('seos')->first();
    	return view('backend.settings.seo',compact('seo'));
    }

    public function seo_update(Request $request,$id)
    {
        $data=array();
        $data['meta_author']=$request->meta_author;
        $data['meta_title']=$request->meta_title;
        $data['meta_keyword']=$request->meta_keyword;
        $data['meta_description']=$request->meta_description;
        $data['google_analytics']=$request->google_analytics;
        $data['alexa_analytics']=$request->alexa_analytics;
        $data['google_verification']=$request->google_verification;
        DB::table('seos')->where('id',$id)->update($data);

        $notification=array(
                'messege'=>'Successfully Update',
                'alert-type'=>'success'
                 );
          return Redirect()->back()->with($notification);
    }

}
