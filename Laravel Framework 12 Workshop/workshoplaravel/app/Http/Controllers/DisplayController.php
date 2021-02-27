<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class DisplayController extends Controller
{
  public function index()
  {
      $html = '<h1 align="center">สวัสดี</h1>';
      PDF::SetTitle('Hello World');
      PDF::SetFont('freeserif', '', 14, '', true);
      PDF::AddPage();
      PDF::writeHTML($html, true, false, true, false, '');
      PDF::Output('hello_world.pdf');
  }
}
