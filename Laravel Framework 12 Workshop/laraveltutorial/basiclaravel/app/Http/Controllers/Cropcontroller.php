<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cropcontroller extends Controller
{
    function index(){
      return view('crop');
    }
    function cropImage(Request $request){
          $image=$request->image;
          list($type,$image)=explode(';',$image);
          list(,$image)=explode(',',$image);
          $image=base64_decode($image);
          $image_name=time().'.png';
          $path=public_path('upload/'.$image_name);
          file_put_contents($path,$image);
          return response()->json(['status'=>true]);
    }
}
