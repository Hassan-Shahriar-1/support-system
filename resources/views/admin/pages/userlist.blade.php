@extends('admin.layout.layout')

@section('content')

<h1 class="text-center text-dark">User List</h1>
<table id="table_id" class="display text-dark" >
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            
            <th>Action</th>
           
        </tr>
    </thead>
   
    
    <tbody>
    <?php
        $count=1;
    ?>
    @foreach($user_list as $cat)
    <tr>
            <td>{{$count}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->email}}</td>
            
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Send Message</button>
            
            <a href="/user/delete/{{$cat->id}}" class="btn btn-danger">Delete</a>
            </td>
    </tr>   
    <?php
    $count++;
    ?>
    @endforeach
    </tbody>
    
</table>


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-dark">Send Your Message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form  action="/sendmsg/opr/{{$cat->id}}" method="post" >

              @csrf
              
                <b class="text-dark">Enter Your Message:</b>
                <br>
                <textarea name="body"></textarea>
                  
                
                <br><br>
                <button type="submit" class="btn btn-info" >Send</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<script>

$(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>


@endsection