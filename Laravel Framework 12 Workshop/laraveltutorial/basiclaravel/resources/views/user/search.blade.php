@extends('user.master')
@section('title','Welcome Search System')
@section('content')
    <div class="container">
          <div class="row">
              <div class="col-md-12">
                    <br>
                    <h1 align="center">Workshop : ระบบค้นหาข้อมูลโดยใช้ Ajax</h1>
                    <br><br>
                    <div align="right">
                      <a href="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
                    </div>
                    <br>
                      <input type="text" name="search" id="search" placeholder="ค้นข้อมูล" class="form-control">
                      <br>
                      <h3 align="center">จำนวนข้อมูล :<span id="total_records"></span></h3>
                      <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>รหัสผู้ใช้</th>
                          <th>ชื่อ</th>
                          <th>นามสกุล</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                  </table>
              </div>
          </div>
    </div>
    <script type="text/javascript">
          $(document).ready(function(){
                fetch_data();
          });
          $(document).on('keyup','#search', function(){
               var query = $(this).val();
               fetch_data(query);
          });
          function fetch_data(query = '')
          {
            $.ajax({
             url:"{{ route('user.action') }}",
             method:'GET',
             data:{query:query},
             dataType:'json',
             success:function(data)
             {
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
             }
          })
         }
    </script>
@stop
