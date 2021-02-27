@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
    <div class="container">
          <div class="row">
              <div class="col-md-12">
                    <br><br>
                    <div align="right">
                      <a href="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
                      <a href="{{route('user.search')}}" class="btn btn-primary">ค้นหาข้อมูล</a>
                    </div>
                    <br>
                    @if(\Session::has('success'))
                      <div class="alert alert-success">
                      <p>{{ \Session::get('success') }}</p>
                      </div>
                    @endif
                    <br>
                      <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>รหัสผู้ใช้</th>
                          <th>ชื่อ</th>
                          <th>นามสกุล</th>
                          <th>แก้ไข</th>
                          <th>ลบ</th>
                          <th>PDF</th>
                      </tr>
                      </thead>
                      @foreach($users as $row)
                      <tbody>
                        <tr>
                          <td>{{$row['id']}}</td>
                          <td>{{$row['fname']}}</td>
                          <td>{{$row['lname']}}</td>
                          <td><a href="{{action('UsersController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                          <td>
                            <form method="post" class="delete_form" action="{{action('UsersController@destroy',$row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                          <td><a href="{{action('UsersController@downloadPDF', $row['id'])}}" class="btn btn-primary">PDF</a></td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
                  {{ $users->links() }}
              </div>
          </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.delete_form').on('submit', function(){
          if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
            return true;
          }
          else {
            return false;
          }
          });
        });
    </script>
@stop
