<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
   
    public function index()
    {
      $data=[];
     
    
	return view('front.about.index')->with($data);
    } 
}
