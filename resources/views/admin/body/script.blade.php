<!-- Jquery Core Js --> 
<script src="{{asset('backend/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script><!-- USA Map Js -->
<script src="{{asset('backend/assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('backend/assets/bundles/c3.bundle.js')}}"></script>

<script src="{{asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('backend/assets/js/pages/blog/blog.js')}}"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
  $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  }) 
    });

  });


</script> 


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>