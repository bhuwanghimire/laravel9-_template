@extends('admin.admin_master')
@section('content')
		<form method="post" action="{{ route('password.update') }}">
                    @csrf
			 <div class="row clearfix">
   		
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Change Password</strong> </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
									<label for="email_address">Current Password</label>
                                        <input type="password" id="current_password"  name="oldpassword" class="form-control" >
										 @error('oldpassword')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
									<label for="email_address">New Password</label>
                                        <input type="password" name="password" id="password" class="form-control" > 
                                     @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
									<label for="email_address">Confirm Password</label>
                                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" >
                                     @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 

                                    </div>
                                </div>
                                <div class="col-12">
                                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">

                                </div>                                
                            </div>                              
                        </div>
                    </div>
                   
                </div>

            </div>
					</form>



						


					
						
						
					
					
@endsection