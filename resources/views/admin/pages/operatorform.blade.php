@extends('admin.layout.layout')
@section('content')

	
		<div class="card-body bg rounded mx-auto card-authentication1">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{URL::to('assets/images/demo-demo-icon-139882881.jpg')}}" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>

		    <form method="post" action="/post/operator">
			@csrf
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="name" class="form-control input-shadow form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>  </div>
					  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" id="email" class="form-control input-shadow form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>

					  			@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="password" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="password" class="form-control input-shadow form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
							  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				  </div>
			   </div>
			  </div>
        <div class="form-group">
          <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
          <div class="position-relative has-icon-right">
           <input type="password" id="password-confirm" class="form-control input-shadow" name="password_confirmation" required autocomplete="new-password" placeholder="Choose Password">
           <div class="form-control-position">
             <i class="icon-lock"></i>
           </div>
          </div>
         </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div>
			  
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
			  <div class="text-center mt-3">Sign Up With</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-primary btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block btn-info"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div>
			
			 </form>
		   </div>
       <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
		  </div>
    </div>
		  
		  
	     
    
     

    @endsection