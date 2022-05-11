@extends('admin.layout.layout')
@section('content')


<div>

<form action="/admin/game/update/{{$edt->id}}" method="post" enctype="multipart/form-data">
@csrf
<lebel class="text-dark">Game Name: </lebel>
<input type="text" name="name" value="{{$edt->name}}" required></input>
<lebel class="text-dark">Icon: </lebel>
<img src="{{URL::to($edt->icon)}}"id="blah" alt="your image" width="70" height="70" />
<input type="file" class="text-dark" name="icon" accept="image/*" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"></input>
<button Type="submit" class="btn-inline btn-sm btn-success">Update</button>
</form>

</div>


<h1 class="text-center">Operator List</h1>
<table id="table_id" class="display text-dark" >
    <thead>
        <tr>
            <th>SL</th>
            <th>Game Name</th>
            <th>Icon</th>
            <th>Action</th>
            <th>created at</th>
           
        </tr>
    </thead>

    <tbody>
    <?php
        $count=1;
    ?>
    @foreach($gmlist as $cat)
    <tr>
            <td>{{$count}}</td>
            <td>{{$cat->name}}</td>
            <td><img src="{{URL::to($cat->icon)}}"></td>
            <td>{{$cat->created_at}}
            
            <td>
            
            <a href="/admin/game/edit/{{$cat->id}}" class="btn btn-success">Edit</a>
            <a href="/admin/game/delete/{{$cat->id}}" class="btn btn-danger">Delete</a>
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