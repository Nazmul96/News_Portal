<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //all post show------
    public function index(){
        $post=DB::table('posts')
        ->join('categories','posts.cat_id','categories.id')
        ->join('subcategories','posts.subcat_id','subcategories.id')
        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
        ->get();

        return view('backend.posts.index',compact('post'));  
    }

    //post insert form-----
    public function create()
    {
        $category=DB::table('categories')->get();
        $division=DB::table('divisions')->get();

        return view('backend.posts.create',compact('category','division'));
    }

    //store post
    public function store(Request $request)
     {
           $validatedData = $request->validate([
                'cat_id' => 'required',
                'subcat_id' => 'required',
        ]);

           $data=array();
           $data['title_bn']=$request->title_bn;
           // $data['title_slug']=Str::slug($request->title_bn, '-');
           $data['title_en']=$request->title_en;
           $data['user_id']= Auth::user()->id;
           $data['cat_id']=$request->cat_id;
           $data['subcat_id']=$request->subcat_id;
           $data['division_id']=$request->division_id;
           $data['district_id']=$request->district_id;
           $data['tags_bn']=$request->tags_bn;
           $data['tags_en']=$request->tags_en;
           $data['details_en']=$request->details_en;
           $data['details_bn']=$request->details_bn;
           $data['headline']=$request->headline;
           $data['first_section']=$request->first_section;
           $data['first_section_thumbnail']=$request->first_section_thumbnail;
           $data['bigthumbnail']=$request->bigthumbnail;
           $data['post_date']=date('d-m-Y');
           $data['post_month']=date("F");

           $image=$request->image;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500,310)->save('public/postimages/'.$image_one);    //   public/postimages/123123.jpg
                $data['image']='public/postimages/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('posts') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->route('post_index')->with($notification);
           }



     }
     //post delete-------
     public function edit($id){
         $post=DB::table('posts')->where('id',$id)->first();
         $category=DB::table('categories')->get();
         $division=DB::table('divisions')->get();
         return view('backend.posts.edit',compact('post','category','division'));
     }

     //post update--------
     public function update(Request $request,$id){
        $validatedData = $request->validate([
            'cat_id' => 'required',
            
        ]);

       $data=array();
       $data['title_bn']=$request->title_bn;
       $data['title_en']=$request->title_en;
       $data['cat_id']=$request->cat_id;
       $data['subcat_id']=$request->subcat_id;
       $data['division_id']=$request->division_id;
       $data['district_id']=$request->district_id;
       $data['tags_bn']=$request->tags_bn;
       $data['tags_en']=$request->tags_en;
       $data['details_en']=$request->details_en;
       $data['details_bn']=$request->details_bn;
       $data['headline']=$request->headline;
       $data['first_section']=$request->first_section;
       $data['first_section_thumbnail']=$request->first_section_thumbnail;
       $data['bigthumbnail']=$request->bigthumbnail;

       $old_image=$request->oldimage;
       $image=$request->image;
       if ($image) {
            unlink($old_image);
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500,310)->save('public/postimages/'.$image_one);    //   public/postimages/123123.jpg
            $data['image']='public/postimages/'.$image_one;   //   public/postimages/123123.jpg
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Post Update ',
                 'alert-type'=>'success'
                );
        return Redirect()->route('post_index')->with($notification);
       }
       else{
           $data['image']=$request->oldimage;
           DB::table('posts')->where('id',$id)->update($data);
           $notification=array(
            'messege'=>'Successfully Post Updated ',
            'alert-type'=>'success'
           );
         return Redirect()->route('post_index')->with($notification);

       }

     }

     public function delete($id)
     {
          $post=DB::table('posts')->where('id',$id)->first();
          unlink($post->image);
          DB::table('posts')->where('id',$id)->delete();
           $notification=array(
                     'messege'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);

     }

    //json data return 
    public function GetSubcat($id)
    {
        $sub=DB::table('subcategories')->where('category_id',$id)->get();
        return response()->json($sub);
    }

    //get subdistrict
    public function Getdistrict($id)
    {
        $sub=DB::table('districts')->where('division_id',$id)->get();
        return response()->json($sub);
    }

}
