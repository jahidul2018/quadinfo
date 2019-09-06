<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class projectController extends Controller
{
    public function project(){
    	return view('frontend/pages/project');
    } 
}
