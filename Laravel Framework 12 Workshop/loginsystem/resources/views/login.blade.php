<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container box">
      <br><br>
      <h3 align="center">ระบบลงชื่อเข้าใช้งาน</h3>
      <div class="row">
      <form method="post" action="{{ url('/main/checklogin') }}">
      {{ csrf_field() }}
      <div class="form-group">
      <label>ป้อนอีเมลของคุณ</label>
      <input type="email" name="email" class="form-control" />
      </div>
      <div class="form-group">
      <label>ป้อนรหัสผ่านของคุณ</label>
      <input type="password" name="password" class="form-control" />
      </div>
      <div class="form-group">
      <input type="submit" name="login" class="btn btn-primary" value="Login" />
      </div>
    </form>
    </div>
  </div>
  </body>
</html>
