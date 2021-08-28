<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Photo Gallery---------

    public function photo_index()
    {
        $photo=DB::table('photos')->get();
        return view('backend.gallery.photos.photo',compact('photo'));
    }

    public function photo_store(Request $request)
    {
        $data=array();
        $data['title']=$request->title;
        $data['type']=$request->type;
        $image=$request->photo;
        if ($image) {
             $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
             Image::make($image)->resize(500,310)->save('public/photos_gallery/'.$image_one);    //   public/postimages/123123.jpg
             $data['photo']='public/photos_gallery/'.$image_one;   //   public/postimages/123123.jpg
              DB::table('photos') ->insert($data);
             $notification=array(
                  'messege'=>'Successfully Photo Inserted ',
                  'alert-type'=>'success'
                 );
         return Redirect()->back()->with($notification);
        }
    }
    public function photo_delete($id)
    {
        $data=DB::table('photos')->where('id',$id)->first();
        unlink($data->photo);
        DB::table('photos')->where('id',$id)->delete();
         $notification=array(
                   'messege'=>'Successfully Photo Deleted ',
                   'alert-type'=>'success'
                  );
       return Redirect()->back()->with($notification);
    }

    public function photo_edit($id)
    {
        $data=DB::table('photos')->where('id',$id)->first();
        return view('backend.gallery.photos.edit',compact('data'));
    }

    public function photo_update(Request $request,$id)
    {
        
        $data=array();
        $data['title']=$request->title;
        $data['type']=$request->type;
        $image=$request->photo;
       

        $old_photo=$request->oldphoto;
      
       if ($image) {
            unlink($old_photo);
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500,310)->save('public/photos_gallery/'.$image_one);    //public/postimages/123123.jpg
            $data['photo']='public/photos_gallery/'.$image_one;   //public/postimages/123123.jpg
            DB::table('photos')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Photo Gallery Update',
                 'alert-type'=>'success',
                );
         return Redirect()->route('photo_index')->with($notification);
       }
       else{
           $data['photo']=$request->oldphoto;
           DB::table('photos')->where('id',$id)->update($data);
           $notification=array(
            'messege'=>'Successfully Photo Gallery Update',
            'alert-type'=>'success'
           );
         return Redirect()->route('photo_index')->with($notification);

       }
    }

     //Video Gallery---------
    
     public function video_index()
     {
         $video=DB::table('videos')->get();
         return view('backend.gallery.videos.video',compact('video'));
     }

     public function video_store(Request $request)
     {
        $data=array();
    	$data['title']=$request->title;
    	$data['embed_code']=$request->embed_code;
    	$data['type']=$request->type;
    	DB::table('videos') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Video Inserted ',
                     'alert-type'=>'success'
                    );
       return Redirect()->back()->with($notification);
     }
     
     public function video_delete($id)
     {
        DB::table('videos')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully Video Deleted ',
            'alert-type'=>'success'
           );
        return Redirect()->back()->with($notification);
     }

     public function video_edit($id)
     {
        $data=DB::table('videos')->where('id',$id)->first();
        return view('backend.gallery.videos.edit',compact('data'));
     }

     public function video_update(Request $request,$id)
     {
        $data=array();
    	$data['title']=$request->title;
    	$data['embed_code']=$request->embed_code;
    	$data['type']=$request->type;
    	DB::table('videos') ->where('id',$id)->update($data);
                $notification=array(
                     'messege'=>'Successfully Video Updated ',
                     'alert-type'=>'success'
                    );
       return Redirect()->Route('video_index')->with($notification);
     }
 
}
