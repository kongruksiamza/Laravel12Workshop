<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Auto Complete Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <br><br>
  <h1 align="center">AutoComplete Laravel</h1>
  <br>
  <div class="form-group">
      <label><b>กรุณาใส่ชื่อจังหวัดของท่าน</b></label>
      <input type="text" name="city_name" id="city_name" class="form-control input-lg" placeholder="ป้อนชื่อจังหวัด" />
      <div id="cityList">
      </div>
      </div>
      {{ csrf_field() }}
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
              $('#city_name').keyup(function(){
                    var query=$(this).val();
                    if(query!=''){
                        var _token=$('input[name="_token"]').val();
                    }
                    $.ajax({
                        url:"{{route('autocomplete.show')}}",
                        method:"POST",
                        data:{query:query,_token:_token},
                        success:function(data){
                              $('#cityList').fadeIn();
                              $('#cityList').html(data);
                        }
                    });
              });
      });
      $(document).on('click','li',function(){
              $('#cityList').fadeOut();
              $('#city_name').val($(this).text());
      })
  </script>
  </body>
</html>
