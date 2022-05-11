@extends('users.layouts.layout')
@section('content')

<div id="chat_box" class="col-md-7 border mt-5  rounded">

<div class="card-header text-center"> <div ><h4 class="text-dark">{{$tknid->title}}</h4> 
       <a href="" class=" btn btn-success float-right">Solved</a></div></div>
      <div class="card-body overflow-Scroll ">
        <div class="d-flex justify-content-start mb-4">
          <div class="img_cont_msg">
            <img  class="card-img rounded-circle" src="assets/images/vd logo.PNG" alt="">
          </div>
          @foreach($msglist as $msg)  @endforeach
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
            <img  class="card-img rounded-circle" src="{{asset('assets/images/vd logo.PNG')}}">
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
      <div class="footer">
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
      @endsection