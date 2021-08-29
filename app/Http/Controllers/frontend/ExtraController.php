<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

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
}
