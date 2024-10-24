<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etender;
class HomeController extends Controller
{
    //
public function home (){

return view ('frontend.layout.app');

}

public function etender (){

  
    $now=  date('Y-m-d');

    $data['allData']=Etender::where('edate', '>=',$now)->orderBy('id','desc')->get();
    return view ('frontend.pages.etender',$data);
    
    }




}
