
@extends('users.layouts.layout')

@section('content')


	
    <div class="row">
      <div class="col-12 mt-5  border  rounded">
        <div class="row pt-1">
          <div class="col 8"><h2 class="text-dark">Token list</h2></div>
          <div class="col-4">
          <a href="/user/token" class="btn btn-danger">Generate Token</a>
           
          
    
          </div>
        </div>
       
        <div class="row ">
        
            

            <div class="col-12">
            <table class=" w-100 text-dark border" >
              <thead>
                <tr class="bg-dark text-white">
                  <th >Token</th>
                  <th >Game Name</th>
                  <th >status</th>
                  <th >Time</th>
                
                </tr>
              </thead>
              <tbody>
              @foreach($list as $li)
                <tr>

                  <td value="{{$li->id}}"><a class="text-dark" href="/userdashboard">{{$li->title}}</a></td>
                  <td>{{$li->name}}</td>
                  <td>{{$li->status}}</td>
                  <td> {{$li->created_at}} </td>
                 
                </tr>
                
                @endforeach
               
                
              </tbody>
             
            </table>
            
        </div>
        
        
        </div>
          
      
      </div>
      <div class="mt-15px pl-2px text-dark">{{$list->links()}}</div>
</div>


      @endsection