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

    //Namaz Setting-------

    public function namaz_setting()
    {
        $namaz=DB::table('namaz')->first();
    	return view('backend.settings.namaz',compact('namaz'));
    }

    public function namaz_update(Request $request,$id)
    {
        $data=array();
          $data['fajr']=$request->fajr;
          $data['johr']=$request->johr;
          $data['asor']=$request->asor;
          $data['magrib']=$request->magrib;
          $data['esha']=$request->esha;
          $data['jummah']=$request->jummah;

          DB::table('namaz')->where('id',$id)->update($data);

             $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //LiveTV Setting-------

    public function livetv_setting()
    {
        $livetv=DB::table('livetv')->first();
    	return view('backend.settings.livetv',compact('livetv'));
    }

    public function livetv_update(Request $request,$id)
    {
          $data=array();
          $data['embed_code']=$request->embed_code;        
          DB::table('livetv')->where('id',$id)->update($data);
          $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function active_livetv($id)
    {
    	DB::table('livetv')->where('id',$id)->update(['status'=>1]);
    	 $notification=array(
                        'messege'=>'Successfully  LiveTv on your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function deactive_livetv($id)
    {
    		DB::table('livetv')->where('id',$id)->update(['status'=>0]);
    	   $notification=array(
                        'messege'=>' LiveTv off  your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

     //Notice Setting-------

     public function notice_setting()
     {
         $notice=DB::table('notices')->first();
         return view('backend.settings.notice',compact('notice'));
     }

     public function notice_update(Request $request,$id)
    {
          $data=array();
          $data['notice']=$request->notice;        
          DB::table('notices')->where('id',$id)->update($data);
          $notification=array(
                        'messege'=>'Successfully Update',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

    public function active_notice($id)
    {
        DB::table('notices')->where('id',$id)->update(['status'=>1]);
        $notification=array(
                    'messege'=>' Notice on  your website',
                    'alert-type'=>'success'
                     );
     return Redirect()->back()->with($notification);
    }

    public function deactive_notice($id)
    {
    		DB::table('notices')->where('id',$id)->update(['status'=>0]);
    	   $notification=array(
                        'messege'=>'Notice off  your website',
                        'alert-type'=>'success'
                         );
         return Redirect()->back()->with($notification);
    }

       //Important Webbsite Setting-------

       public function important_website()
       {
           $website=DB::table('important_websites')->get();
           return view('backend.settings.important_website',compact('website'));
       }

       public function important_website_store(Request $request)
       {
            $data=array();
             $data['website_name_bn']=$request->website_name_bn;       
             $data['website_name_en']=$request->website_name_en;       
             $data['website_link']=$request->website_link;     
             DB::table('important_websites')->insert($data);
             $notification=array(
                           'messege'=>'Successfully insert',
                           'alert-type'=>'success'
                            );
            return Redirect()->back()->with($notification);
       }

       public function edit($id)
       {
           $data=DB::table('important_websites')->where('id',$id)->first();
           return view('backend.settings.important_website_edit',compact('data'));
       }

       public function update(Request $request,$id)
       {
        $data=array();
        $data['website_name_bn']=$request->website_name_bn;       
        $data['website_name_en']=$request->website_name_en;       
        $data['website_link']=$request->website_link;     
        DB::table('important_websites')->where('id',$id)->update($data);
        $notification=array(
                      'messege'=>'Successfully Update',
                      'alert-type'=>'success'
                       );
       return Redirect()->route('important_website')->with($notification);
       }


       public function delete($id)
       {
         DB::table('important_websites')->where('id',$id)->delete();
         $notification=array(
            'messege'=>'Successfully deleted',
            'alert-type'=>'error',
             );
       return Redirect()->back()->with($notification);
       }



}
