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
}
