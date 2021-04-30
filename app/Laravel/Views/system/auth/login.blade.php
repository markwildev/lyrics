@extends('system._layouts.auth')

@section('content')
	<div class="content mt-5 content-fixed content-auth">
    <div class="container">
      <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
    

        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">

          <div class="wd-100p">
           <center><h3 class="tx-color-01 mg-b-5">Sign In</h3>
            <p class="tx-color-03 tx-16 mg-b-40">LARAVEL FUNDAMENTAL SKILL TEST</p>
            </center>
            @include('system._components.notifications')
            <form action="" method="POST">
              {!!csrf_field()!!}
              <div class="form-group">
                <label>Username</label> 
                <input type="text" style="text-transform: none" class="form-control" name="username" id="username" placeholder="Enter your username" value="{{old('username')}}">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input style="text-transform: none" type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
              </div>
              <button type="submit" id="login" class="btn btn-brand-02 btn-block">Sign in</button>
            </form>
          </div>
        </div><!-- sign-wrapper -->
      </div><!-- media -->
    </div><!-- container -->
  </div><!-- content -->
@stop
@section('page-scripts')

<script type="text/javascript">
    $(document).ready(function(){
        
// login
     $('#login').on('click',function(event){
      
      var username = $('#username').val();
        var password = $('#password').val();
            $.ajax({

            method:"POST",
            data:{ username: username,password: password },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             url:"{{ route("api.auth.login",['json']) }}",
            success:function(response){

              console.log(response.token)
              localStorage.setItem("token",response.token);

              setToken(response.token)
              console.log(response.data)
              getUserProfie(JSON.response.data)
              // location.reload();
              
              
            },
            error:function(response){

             console.log(response.responseJSON.msg)
             $('#error').text(response.responseJSON.msg);
             $('#error').removeAttr("hidden")
           }

        })
        })//end of login
    })
     
</script>
@stop