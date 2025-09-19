<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCategory;
class WebPagesController extends Controller
{
    //
        public function home(){
            $MyCategory=AddCategory::All();
        return view('frontView.home', compact('MyCategory'));
    }
}
