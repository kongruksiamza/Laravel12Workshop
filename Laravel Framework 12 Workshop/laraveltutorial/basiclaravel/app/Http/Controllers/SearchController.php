<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    function search(){
        return view('user.search');
    }
    function action(Request $request){
          if($request->ajax()){
             $output='';
             $result=$request->get('query');
             if($result != ''){
                  $data=DB::table('users')
                  ->where('fname','like','%'.$result.'%')
                  ->orWhere('lname','like','%'.$result.'%')->get();
             }else{
                $data=DB::table('users')->get();
             }
             $total_row=$data->count();
             if($total_row>0){
                foreach ($data as $row) {
                        $output.='<tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->fname.'</td>
                        <td>'.$row->lname.'</td>
                        </tr>';
                }
             }else{
                $output="<tr><td align='center' colspan='5'>ไม่พบข้อมูล</td></tr>";
             }
             $data=array('table_data'=>$output,'total_data'=>$total_row);
             echo json_encode($data);
          }
    }
}
