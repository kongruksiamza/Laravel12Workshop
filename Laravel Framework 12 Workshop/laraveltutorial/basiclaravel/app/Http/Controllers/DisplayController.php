<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
class DisplayController extends Controller
{
    function index(){
        return DataTables::of(User::query())->make(true);
    }
    function create(){
        return view('display');
    }
}
