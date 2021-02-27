<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
  function index() {
    return view('login');
  }
  function checklogin(Request $request)   {
      $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3' ]);
      $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password'));
      if(Auth::attempt($user_data))  {
      	return redirect('main/successlogin');
      }else{
      	return back()->with('error', 'เกิดข้อผิดพลาด');
      }
    }
    function successlogin(){
        return view('successlogin');
    }
    function logout(){
      Auth::logout();
      return redirect('main');
    }

}
