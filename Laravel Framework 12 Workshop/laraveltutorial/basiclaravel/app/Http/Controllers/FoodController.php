<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class FoodController extends Controller
{
    function loadMore(Request $request){
          $foods=Food::paginate(4);
          $html='';
          foreach ($foods as $food) {
                  $html.='<div class="col-md-6" align="center">
                        <h4><b>ต้มยำกุ้ง</b></h4>
                        <img src="'.$food->url.'" class="food"/><br>
                        <strong>ต้มยำกุ้งเมนูชื่อดังอันดับ 1 ของไทย ที่ดังไกลไปทั่วโลก เป็นที่รู้จักในบรรดาชาวต่างชาติ ซึ่งมีให้เลือก 2 แบบ คือ แบบน้ำข้นใส่กระทิ และแบบน้ำใส ซึ่งจะมีความเปรี้ยวและมันน้อยกว่า</strong>
                  </div>';
          }
          if($request->ajax()){
                return $html;
          }
          return view('food');
    }
}
