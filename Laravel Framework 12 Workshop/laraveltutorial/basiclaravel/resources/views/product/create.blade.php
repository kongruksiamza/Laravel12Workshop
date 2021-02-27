<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ระบบบันทึกข้อมูลสินค้า</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h3 align="center">บันทึกข้อมูลสินค้า</h3>
      <div class="row">
      <form method="post" action="{{url('product')}}">
      {{ csrf_field() }}
      <div class="form-group">
      <label>ชื่อสินค้า</label>
      <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
      <label>ราคา</label>
      <input type="text" name="price" class="form-control" />
      </div>
      <label>ประเภทสินค้า</label>
      <select class="form-control" name="typename">
          <option value="1">เครื่องดื่ม</option>
          <option value="2">ของใช้ไฟฟ้า</option>
          <option value="3">เครื่องเขียน</option>
          <option value="4">กระเป๋า</option>
      </select>
      <br>
      <div class="form-group">
      <input type="submit" class="btn btn-primary" value="บันทึก" />
      </div>
    </form>
    </div>
  </div>
  </body>
</html>
