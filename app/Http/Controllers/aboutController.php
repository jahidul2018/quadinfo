<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutController extends Controller
{
    public function about(){
    	return view('frontend/pages/about');
    } 
}
