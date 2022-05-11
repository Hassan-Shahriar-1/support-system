@extends('admin.layout.layout')

@section('content')


<h1 class="text-center text-dark">Message List</h1>
<table id="table_id" class="display text-dark" >
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Massage</th>
            <th>Time</th>
            <th>Action</th>
           
        </tr>
    </thead>
   
    
    <tbody>
    <?php
        $count=1;
    ?>
    @foreach($msg_list as $cat)
    <tr>
            <td>{{$count}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->email}}</td>
            <td>{{$cat->body}}</td>
            <td>{{$cat->created_at}}</td>
            
            <td>
            <a href="/admin/msg/dlt/{{$cat->id}}" class="btn btn-danger">Delete</a>           
            <!-- <a href="/user/delete/{{$cat->id}}" class="btn btn-danger">Delete</a> -->
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