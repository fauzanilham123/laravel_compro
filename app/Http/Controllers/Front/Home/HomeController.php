<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function index()
    {
        $data = [];
        $data['clients']=DB::table('clients')->where('flag',1)->get();
        $data['homes']=DB::table('homes')->where('flag',1)->get();
        $data['settings']=DB::table('settings')->where('flag',1)->get();
        $data['bussinesss']=DB::table('businesses')->where('flag',1)->get();
      
    
	return view('front.home.index')->with($data); 
    } 
}