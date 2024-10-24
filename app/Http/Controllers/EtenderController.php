<?php

namespace App\Http\Controllers;
use App\Models\Etender;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\View\View;
class EtenderController extends Controller
{
    //

    function EtenderPage():View{
       
        return view('pages.dashboard.etender-page');
    }


    function CreateEtender(Request $request)
    {
        $user_id=$request->header('id');

        // Prepare File Name & Path
        $img=$request->file('img');

        $t=time();
        $file_name=$img->getClientOriginalName();
        $img_name="{$user_id}-{$t}-{$file_name}";
        $img_url="uploads/{$img_name}";


        // Upload File
        $img->move(public_path('uploads'),$img_name);


        // Save To Database
        return Etender::create([
            'name'=>$request->input('name'),
             'sdate'=>$request->input('sdate'),
             'edate'=>$request->input('edate'),
            'img_url'=>$img_url,          
            'user_id'=>$user_id
        ]);
    }

    function DeleteEtender(Request $request)
    {
        $user_id=$request->header('id');
        $etender_id=$request->input('id');
        $filePath=$request->input('file_path');
        File::delete($filePath);
        return Etender::where('id',$etender_id)->where('user_id',$user_id)->delete();

    }


    function EtenderByID(Request $request)
    {
        $user_id=$request->header('id');
        $product_id=$request->input('id');
        return Etender::where('id',$etender_id)->where('user_id',$user_id)->first();
    }


    function EtenderList(Request $request)
    {
        $user_id=$request->header('id');
        return Etender::where('user_id',$user_id)->get();
    }




    function UpdateEtender(Request $request)
    {
        $user_id=$request->header('id');
        $product_id=$request->input('id');

        if ($request->hasFile('img')) {

            // Upload New File
            $img=$request->file('img');
            $t=time();
            $file_name=$img->getClientOriginalName();
            $img_name="{$user_id}-{$t}-{$file_name}";
            $img_url="uploads/{$img_name}";
            $img->move(public_path('uploads'),$img_name);

            // Delete Old File
            $filePath=$request->input('file_path');
            File::delete($filePath);

            // Update Product

            return Etender::where('id',$product_id)->where('user_id',$user_id)->update([
                'name'=>$request->input('name'),
                'sdate'=>$request->input('sdate'),
                'edate'=>$request->input('edate'),
                'img_url'=>$img_url
               
            ]);

        }

        else {
            return Etender::where('id',$etender_id)->where('user_id',$user_id)->update([
                'name'=>$request->input('name'),
                'sdate'=>$request->input('sdate'),
                'edate'=>$request->input('edate'),
                
            ]);
        }
    }


// Frontend




}
