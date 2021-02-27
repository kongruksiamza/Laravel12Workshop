@extends('product/master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Product Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('product.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <h3 align="center">Total Data : <span id="total_records"></span></h3>
  <table class="table table-bordered table-striped">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
    </div>
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
   </tr>
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 fetch_product_data();
 $('.delete_form').on('submit', function(){
  if(confirm("คุณต้องการลบหรือไม่ ?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
 function fetch_product_data(query = '')
 {
    $.ajax({
     url:"{{ route('product.action') }}",
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
 $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_product_data(query);
 });
});
</script>

@endsection
