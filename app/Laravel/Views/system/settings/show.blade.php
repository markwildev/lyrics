@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
  <div class="pl-2 pr-2">
      <div class="tx-13 mg-b-25">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex flex-row">
            <i data-feather="skip-back" class="mt-1 mr-2"></i>
            <h3>Profile</h3>
          </div>
            <p class="tx-14 mg-b-30">Profile Management</p>
            <hr> 
            @include('system._components.notifications')
            <form action="" method="Post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <input type="file" class="form-control" name="file">
                  </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                  </div>
              </div>
            </form>
             </div>
           </div>
      </div>
  </div><!-- container -->
</div><!-- content -->
@stop