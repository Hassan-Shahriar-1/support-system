@extends('operator.layout.layout')

@section('content')


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid bg-white">

  <!--Start Dashboard Content-->

	<div class="container-fluid text-dark ">
    <div class="row">
      <div class="col-md-5 mt-5 border bg1 rounded" id='dshbrd'>
        <div class="row pt-1">
          <div class="col 8"><h2 class="text-dark">Token list</h2></div>
          <div class="col-4"><button class="btn btn-danger">Generate Token</button></div>
        </div>
       
        <div class="row ">
          <div class="col-12 ">
            <h4 class="text-dark text-center">Items</h4>


            <table class="table text-dark border">
              <thead>
                <tr class="bg-dark text-white">
                  <th class="col-6">Token</th>
                  <th class="col-4">Game Name</th>
                  <th class="col-2">status</th>
                
                </tr>
              </thead>
              <tbody>
                <tr>
               
                  <td onclick="myFunction('dshbd')">Mark</td>
                  <td>VD</td>
                  <td>Otto</td>
                 
                </tr>
                <tr>
              
                  <td onclick="myFunction('dshbd')">Jacob</td>
                  <td>VD</td>
                  <td>Thornton</td>
              
                </tr>
                <tr>
                 
                  <td onclick="myFunction('dshbd')">Larry</td>
                  <td>VD</td>
                  <td>the Bird</td>
               
                </tr>
                <tr>
               
                  <td onclick="myFunction('dshbd')">Mark</td>
                  <td>VD</td>
                  <td>Otto</td>
                 
                </tr>
                <tr>
              
                  <td onclick="myFunction('dshbd')">Jacob</td>
                  <td>VD</td>
                  <td>Thornton</td>
              
                </tr>
                <tr>
                 
                  <td onclick="myFunction('dshbd')">Larry</td>
                  <td>VD</td>
                  <td>the Bird</td>
               
                </tr>
                <tr>
               
                  <td onclick="myFunction('dshbd')">Mark</td>
                  <td>VD</td>
                  <td>Otto</td>
                 
                </tr>
                <tr>
              
                  <td onclick="myFunction('dshbd')">Jacob</td>
                  <td>VD</td>
                  <td>Thornton</td>
              
                </tr>
                <tr>
                 
                  <td onclick="myFunction('dshbd')">Larry</td>
                  <td>VD</td>
                  <td>the Bird</td>
               
                </tr>
                <tr>
               
                  <td onclick="myFunction('dshbd')">Mark</td>
                  <td>VD</td>
                  <td>Otto</td>
                 
                </tr>
                <tr>
              
                  <td onclick="myFunction('dshbd')">Jacob</td>
                  <td>VD</td>
                  <td>Thornton</td>
              
                </tr>
                <tr>
                 
                  <td onclick="myFunction('dshbd')">Larry</td>
                  <td>VD</td>
                  <td>the Bird</td>
               
                </tr>
              </tbody>
            </table>
          </div>
        
        </div>

      
      </div>
      <div class="col-md-7 border mt-5 bg1 rounded" id="dshbd">
        
      <div class="card-header text-center"> <div ><h4 class="text-dark">Token name</h4> 
       <button class=" btn btn-success float-right">Solved</button></div></div>
      <div class="card-body overflow-Scroll ">
        <div class="d-flex justify-content-start mb-4">
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
          <div class="msg_cotainer">
            Hi, how are you samim?
            <span class="msg_time text-dark">8:40 AM, Today</span>
          </div>
        </div>
        <div class="d-flex justify-content-end mb-4">
          <div class="msg_cotainer_send">
            Hi Khalid i am good tnx how about you?
            <span class="msg_time_send text-dark">8:55 AM, Today</span>
          </div>
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
        </div>
        <div class="d-flex justify-content-start mb-4">
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
          <div class="msg_cotainer">
            I am good too, thank you for your chat template
            <span class="msg_time text-dark ">9:00 AM, Today</span>
          </div>
        </div>
        <div class="d-flex justify-content-end mb-4">
          <div class="msg_cotainer_send">
            You are welcome
            <span class="msg_time_send text-dark">9:05 AM, Today</span>
          </div>
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
        </div>
        <div class="d-flex justify-content-start mb-4">
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
          <div class="msg_cotainer">
            I am looking for your next templates
            <span class="msg_time text-dark">9:07 AM, Today</span>
          </div>
        </div>
        <div class="d-flex justify-content-end mb-4">
          <div class="msg_cotainer_send">
            Ok, thank you have a good day
            <span class="msg_time_send text-dark">9:10 AM, Today</span>
          </div>
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
        </div>
        <div class="d-flex justify-content-start mb-5">
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
          <div class="msg_cotainer">
            Bye, see you
            <span class="msg_time text-dark">9:12 AM, Today</span>
          </div>
        </div>
      </div>
      <div class="footer fixed-bottom">
        <div class="input-group">
          <div class="input-group-append attach_btn">
            <!-- <span class="input-group-text attach_btn"><input type="file"><i class="fas fa-paperclip"></i> </span> -->
            <div class="image-upload">
            
          <div class="d-none"> <input id="file-input" type="file"/>
          </div>
          <label for="file-input">
            <span class="input-group-text attach_btn"><i class="fas fa-paperclip" onclick="document.getElementById('file-input').click();"></i>
          </label>
             
          </div>
          </div>
          <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
          <div class="input-group-append ">
            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->

	<!--End footer-->
	
  
   
  </div><!--End wrapper-->

  @endsection