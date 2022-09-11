<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class ExtraController extends Controller
{
    public function bangla()
    {
        Session::get('language');
        session()->forget('language');
        session()->put('language','Bangla');
        return redirect()->back();
    }

    public function english()
    {
        Session::get('language');
        session()->forget('language');
        session()->put('language','English');
        return redirect()->back();
    }

    public function SinglePost($id,$slug)
    {
           $post=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->join('users','posts.user_id','users.id')
                        ->select('posts.*','categories.category_bn','categories.category_en','subcategories.subcategory_bn','subcategories.subcategory_en','users.name')
                        ->where('posts.id',$id)
                        ->first();
            // echo '<pre>';
            // print_r($post);die();            
           return view('frontend.singlepost',compact('post'));  
    }

    public function AllPost($id,$subcategory_bn)
    {
        $posts=DB::table('posts')->where('subcat_id',$id)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
    }

    public function AllPostscat($id ,$category_bn)
    {
        $posts=DB::table('posts')->where('cat_id',$id)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
    }

    public function GetSubDist($division_id)
    {
            $district=DB::table('districts')->where('division_id',$division_id)->get();
            return response()->json($district);
    }

    public function Saradesh(Request $request)
     {
         $division_id=$request->division_id;
         $district_id=$request->district_id;

       $posts=DB::table('posts')->where('division_id',$division_id)->where('district_id',$district_id)->orderBy('id','DESC')->paginate(15);
        return view('frontend.allposts',compact('posts'));
     }
}
