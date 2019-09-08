<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\career;


class frontendController extends Controller
{
   public function index(){
		   return view('frontend.pages.index');
	 
	}
	 public function career(){
    	return view('frontend.pages.career');
    }
     public function careerpost(Request $get){

        //get file to page as name
        $cvfile= $get->file('cvfile');
        $cvname= $cvfile->getClientOriginalName();
        //dd($cvname);
        // creating path for the file 
        $cvfile->move(public_path() . '/files/', $cvfile->getClientOriginalName());
     	 
        $ca=new career();
     	$ca->name= $get->name; 
     	$ca->email= $get->email; 
     	$ca->position= $get->position;
     	$ca->file= $cvname;
     	$ca->message= $get->message;
     	$ca->save();
        

        
     	//return response()->alart('successfully');
        return redirect()->back()->with('alert','successfully Done');


    	//return view('frontend.pages.career');
/*       $this->validate($id, [

                'file.*' => 'mimes:doc,pdf,docx,zip'
        ]);
        if($id->hasfile('file'))
         {
            foreach($id->file('file') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
         }
         $ca->save();
        return back()->with('success', 'Data Your files has been successfully added');*/
        /*$ca->file->getClientOriginalName();
        $extension = Input::file('file')->getClientOriginalExtension();
        $filename = rand(11111111, 99999999). '.' . $extension;
        $fullPath = $filename;

        $ca->file('file')->move(base_path() . '/public/files/', $filename);
        $ca->file = $fullPath;

        if ($ca->save())
        {
        return redirect()->back()->with('alert','Your book has been uploaded');
        }*/
    }
}

