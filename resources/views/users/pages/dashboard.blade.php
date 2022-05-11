@extends('users.layouts.layout')


@section('content')

<script href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


  <!--Start Dashboard Content-->

	<div class="container-fluid text-dark">
    <div class="row">
      <div class="col-md-5 mt-5  border  rounded">
        <div class="row pt-1">
          <div class="col 8"><h2 class="text-dark">Token list</h2></div>
          <div class="col-4">
          <a href="/user/token" class="btn btn-danger">Generate Token</a>
         
    
          </div>
        </div>
        
       
        <div class="row ">
          <div class="col-12 ">
           


            <table id="myTable" class="display bg-white">
              <thead>
                <tr class="bg-dark ">
                  <th class="col-5 text-white">title</th>
                  <th class="col-3 text-white">Game Name</th>
                  <th class="col-2 text-white">status</th>
                  <th class="col-2 text-white">chat box</th>
                </tr>

              </thead>
              
              <tbody>
              <?php
              $id=Auth::user()->id; 
              $tkn=DB::table('tickets')->join('gamelists','tickets.gameid','=','gamelists.id')->select('tickets.*','gamelists.name')->where('tickets.user_id','=',$id)->get() ?>
              @foreach($tkn as $tk)
              <tr>
               
                  <td >{{$tk->title}}</td>
                  <td >{{$tk->name}}</td>
                  <td class="text-center">{{$tk->status}}</td>
                  <td class="text-right"><a class="btn btn-sm btn-info" href="/chat/{{$tk->id}}">Chat</a> </td>
                 
                </tr>
                
               
                @endforeach
              </tbody>
              
            </table>
          </div>
        
        </div>

      
      </div>
      <div id="chat_box" class="col-md-7 border mt-5  rounded">
        
     
    </div>
  </div>



      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
	
	<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

  </script>


@endsection


