@extends('admin.layout.layout')

@section('content')


<h1 class="text-center text-dark">Category List</h1>

<div>
<form method="post" action="/admin/category/update/{{$edt->id}}"  class="validate">
  @csrf
  <div class="form-field">
    <label class="text-dark" for="full-name">Category Name:</label>
    <input type="text" name="name" value="{{$edt->name}}" placeholder="enter category name" required />&nbsp;&nbsp;&nbsp;
    <input type="submit" class="btn btn-info" value="Update " />
    
  </div>
  
  
  <div class="col-3 text-center mt-2">
    <label ></label>
    
  </div>
</form>
</div>
<br>
<table id="table_id" class="display text-dark" >
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>          
            <th>Action</th>
           
        </tr>
    </thead>
   
    
    <tbody>
    <?php
        $count=1;
    ?>
    @foreach($cat_list as $cat)
    <tr>
            <td>{{$count}}</td>
            <td>{{$cat->name}}</td>
            
            
            <td>
            <a href="/admin/category/edit/{{$cat->id}}" class="btn btn-info">Edit Category</a>
            
            <a href="/admin/category/delete/{{$cat->id}}" class="btn btn-danger">Delete</a>
            </td>
    </tr>   
    <?php
    $count++;
    ?>
    @endforeach
    </tbody>
    
</table>
<script>

$(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>


@endsection