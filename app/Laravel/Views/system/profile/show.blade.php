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
            <div class="row">
                <div class="col-lg-12">
                    @include('system._components.notifications')
                </div>
            </div>
<form action="" method="POST">
    {{ csrf_field() }}
<input type="text" name="id" value="{{ Auth::user()->id }}" hidden >
        <div class="row">
           
            <div class="col-lg-5">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">New Password</label>
                    <input type="password" name="current_password" id="" class="form-control" value="{{ old('current_password') }}">
                        @if($errors->first('current_password'))
                        <p class="form-text text-danger">{{$errors->first('current_password')}}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    @if($errors->first('password'))
                <p class="form-text text-danger">{{$errors->first('password')}}</p>
                @endif
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Current Password</label>
                        <input type="password" name="password_confirmation" id="" class="form-control">
                    </div>
                </div>

                
                <div class="col-lg-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark ">Submint</button>
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