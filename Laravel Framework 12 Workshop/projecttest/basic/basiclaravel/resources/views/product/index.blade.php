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
   <a href="{{route('product.search')}}" class="btn btn-success">Search</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($products as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['name']}}</td>
    <td>{{$row['price']}}</td>
    <td><a href="{{action('Productcontroller@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
    <form method="post" class="delete_form" action="{{action('Productcontroller@destroy', $row['id'])}}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="DELETE" />
     <button type="submit" class="btn btn-danger">Delete</button>
    </form>
   </td>
   </tr>
   @endforeach
  </table>
  {{ $products->links() }}
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
});
</script>

@endsection
