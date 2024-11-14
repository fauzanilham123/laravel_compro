<?php

namespace App\Http\Controllers\Front\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
   
    public function index()
    {
      $data=[];
      $data['settings']=DB::table('settings')->where('flag',1)->get();
      
    
	return view('front.contact.index')->with($data);
    } 
}