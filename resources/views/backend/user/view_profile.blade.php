@extends('admin.admin_master')
@section('content')
  <div class="container-fluid">
            <div class="row clearfix">
            
                <div class="col-lg-12 col-md-12">
                           <p><a href="{{ route('profile.edit') }}" style="float:right;" class="btn btn-round btn-success mb-5">Edit Profile</a></p>

                    <div class="card mcard_3">
                        <div class="body">
                        
                            <a href="#"><img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" class="rounded-circle shadow" alt="profile-image" height="100px" width="100px"></a>
                            <h4 class="m-t-10">{{ $user->name }}</h4>                            
                            <div class="row">
                                <div class="col-12">
                                    <ul class="social-links list-unstyled">
                                        <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    <p class="text-muted">{{ $user->email}}</p>
                                </div>
                               
                                {{-- <div class="col-4">                                    
                                    <small>Email:</small>
                                    <h5></h5>
                                </div> --}}
                                <div class="col-4">                                    
                                    <small></small>
                                   
                                </div>                            
                            </div>
                        </div>
                    </div>
                                 
                </div>
               
            </div>
        </div>

@endsection