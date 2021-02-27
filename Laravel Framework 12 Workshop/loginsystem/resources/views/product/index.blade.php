<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ระบบแสดงความสัมพันธ์ของสินค้า</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
  <body>
    <div class="container">
          <br><br>
          <h2 align="center">แสดงข้อมูลสินค้าและประเภทสินค้า</h2>
          <br>
          <a href="{{route('product.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
          <div class="row">
              <div class="col-md-12">
                <br><a href=""></a>
                <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อ</th>
                    <th>ราคา</th>
                    <th>ประเภทสินค้า</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $row)
                  <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{number_format($row->price,2)}}</td>
                      <td>{{$row->typeProduct->type_name}}</td>
                  </tr>
                  </tbody>
                  @endforeach
              </table>
              </div>
            </div>
            </div>
  </body>
</html>
