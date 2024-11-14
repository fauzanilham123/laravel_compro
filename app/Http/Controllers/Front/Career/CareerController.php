<?php

namespace App\Http\Controllers\Front\Career;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
   
    public function index()
    {
      $data=[];
      $data['settings']=DB::table('settings')->where('flag',1)->get();
      $data['career_pages']=DB::table('career_pages')->get();
      $data['cultures']=DB::table('cultures')->where('flag',1)->get();
      $data['benefits']=DB::table('benefits')->where('flag',1)->get();
      $data['categories']=DB::table('categories')->where('flag',1)->get();
      $data['careers']=DB::table('careers')->join('categories','careers.id_category', '=', 'categories.id')->where('careers.flag',1)->get();
     
     
    
	return view('front.career.index')->with($data);
    } 
}
