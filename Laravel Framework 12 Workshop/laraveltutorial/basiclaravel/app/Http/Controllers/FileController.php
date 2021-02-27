<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function index(){
          return view('upload');
    }
    function upload(){
        $imageName=request()->file->getClientOriginalName();
        request()->file->move(public_path('upload-image'),$imageName);
        return response()->json('[uploaded =>/upload-image/'.$imageName.']');
    }
}
