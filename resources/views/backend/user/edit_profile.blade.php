@extends('admin.admin_master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                    @csrf
			 <div class="row clearfix">
   		
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Security</strong> Settings</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ $editData->email }}" class="form-control" placeholder="User Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                       <input type="file" name="image" class="form-control" id="image"> 
									<img id="showImage" src="{{ (!empty($user->image))? url('upload/user_image/'.$user->image):url('upload/no_image.jpg') }}" alt="" srcset="" style="width:100px;height:100px;border:1px solid #000000;">


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
 
  <script>
  
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

  </script>

@endsection