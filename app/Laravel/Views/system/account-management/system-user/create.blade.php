@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
  <div class="pl-2 pr-2">
      <div class="tx-13 mg-b-25">
        <div class="row">
          <div class="col-lg-8">
            <h3>Create Account</h3>
            <p class="tx-14 mg-b-30">Fill out the form below to update your information.</p>
              <section class="mt-4">     
                  <div class="row row-sm">
                    <div class="form-group col-md-12">
                      <label class="text-uppercase font-light">Full Name</label>                  
                      <input type="text" class="form-control" name="full_name">
                    </div>
                   
                    <div class="form-group col-md-12">
                      <label class="text-uppercase font-light">User Type</label>
                      <select class="custom-select" name="user_type">
                        <option></option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="text-uppercase font-light">Email Addres</label>
                      <input type="text" class="form-control" name="email_address">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-uppercase font-light">Password</label>
                      <input type="text" class="form-control" name="password">
                    </div> 
                    <div class="form-group col-md-6">
                      <label class="text-uppercase font-light">Confirm Password</label>
                      <input type="text" class="form-control" name="confirm_password">
                    </div> 
                    <div class="col-md-12 text-right">
                      <button class="btn btn-primary"><i data-feather="user-plus" class="mr-2"></i>Create Account</button>
                    </div>        
                  </div><!-- row -->
               </section>
             </div>
           </div>
      </div>
  </div><!-- container -->
</div><!-- content -->
@stop