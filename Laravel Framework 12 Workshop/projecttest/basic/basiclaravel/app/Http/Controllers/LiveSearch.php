<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use DB;
class LiveSearch extends Controller
{


  public function search()
  {
      return view('product.search');
  }
  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = DB::table('products')
       ->where('name', 'like', '%'.$query.'%')
       ->orWhere('price', 'like', '%'.$query.'%')
       ->get();
    }
    else
    {
     $data = DB::table('products')
       ->get();
    }
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->id.'</td>
       <td>'.$row->name.'</td>
       <td>'.$row->price.'</td>
      </tr>
      ';
     }
    }
    else
    {
     $output = '
     <tr>
      <td align="center" colspan="5">No Data Found</td>
     </tr>
     ';
    }
    $data = array(
     'table_data'  => $output,
     'total_data'  => $total_row
    );
    echo json_encode($data);
   }
  }
}
