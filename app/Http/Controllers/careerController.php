<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class careerController extends Controller
{
    public function career(){
    	return view('frontend/pages/career');
    } 
}
