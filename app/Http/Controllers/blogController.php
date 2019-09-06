<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogController extends Controller
{
    public function blog(){
    	return view('frontend/pages/blog');
    } 
    public function single(){
    	return view('frontend/pages/blog-single');
    } 
}
