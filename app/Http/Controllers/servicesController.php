<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicesController extends Controller
{
   public function services(){
    	return view('frontend/pages/services');
    } 
}
