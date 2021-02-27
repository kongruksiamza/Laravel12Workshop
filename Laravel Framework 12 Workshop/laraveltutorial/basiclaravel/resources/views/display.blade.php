<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DataTables : Laraval</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
            <div class="container">
            <h1 align="center">DataTables : Laraval Workshop</h1>
            <table class="table table-bordered" id="result">
               <thead>
                  <tr>
                     <th>รหัสผู้ใช้</th>
                     <th>ชื่อ</th>
                     <th>นามสกุล</th>
                  </tr>
               </thead>
            </table>
          </div>
          <script type="text/javascript">
              $(function() {
                   $('#result').DataTable({
                   ajax: '{{ url('index') }}',
                   columns: [
                            { data: 'id', name: 'id' },
                            { data: 'fname', name: 'fname' },
                            { data: 'lname', name: 'lname' }
                         ]
                    });
                });
          </script>
  </body>
</html>
