<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vote System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>
  <body>
    <div class="container">
    <br>
    <form class="form-group" id="like_form" method="post">
    <div class="form-group">
    <h2 align="center">Vote Programming Language</h2>
     <div class="radio">
      <label><input type="radio" name="language" value="C#" />C#</label>
     </div>
     <div class="radio">
      <label><input type="radio" name="language" value="JAVA" />JAVA</label>
     </div>
     <div class="radio">
      <label><input type="radio" name="language" value="PHP" />PHP</label>
     </div>
     <div class="radio">
      <label><input type="radio" name="language" value="GO" />GO</label>
     </div>
     <div class="radio">
      <label><input type="radio" name="language" value="JavaScript" /> JavaScript</label>
     </div>
      <div class="form-group">
       <input type="submit" name="like" class="btn btn-info" value="Vote" />
      </div>
    </div>
      {{ csrf_field() }}
    </form>
    <div class="panel panel-default">
        <div class="panel-body" align="center">
            <div id="board" style="width:750px; height:450px;"></div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
              var analytics =<?php echo $vote;?>

              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = { title : 'ผลโหวตภาษาคอมพิวเตอร์ในดวงใจ' };
                var chart = new google.visualization.PieChart(document.getElementById('board'));
                chart.draw(data, options);
              }
            $(document).ready(function(){
                    $('#like_form').on('submit',function(event){
                            event.preventDefault();
                            var checked=$('input[name=language]:checked','#like_form').val();
                            if(checked==undefined){
                                alert("กรุณาเลือกตัวเลือก");
                                return false;
                            }else{
                                var form_data=$(this).serialize();
                                $.ajax({
                                  url:"{{route('votesystem.show')}}",
                                  method:"POST",
                                  data:form_data,
                                  dataType:"json",
                                  success:function(data){
                                    $('#like_form')[0].reset();
                                    analytics = data;
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);
                                  }
                                })
                            }
                    });
            });
    </script>
  </body>
</html>
