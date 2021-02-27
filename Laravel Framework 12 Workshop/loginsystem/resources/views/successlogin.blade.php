<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br>
      @if(isset(Auth::user()->email))
        <div class="alert alert-success success-block">
         <strong>Welcome : {{ Auth::user()->name }}</strong><br>
         <strong>E-mail : {{ Auth::user()->email }}</strong>
         <br />
         <a href="{{ url('/main/logout') }}" class="btn btn-primary">Logout</a>
        </div>
       @else
        <script>window.location = "/main";</script>
       @endif

  </div>
  </body>
</html>
