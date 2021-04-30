@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
      <div>
        <div class="d-flex justify-content-md-between mb-2">
          <h4 id="section1" class="mb-3 mb-lg-0 mb-md-0 mb-xl-0">List of System User</h4>
          <a href="{{ route('system.account_management.system_user.create')}}" class="btn btn-primary mg-b-10 font-small">
          	<i data-feather="user-check" class="mr-2"></i>Create System User
          </a>
        </div>
        <div class="row">
        	<div class="col-lg-6">
		          <div class="row">
		            <div class="col-12">
		              <input type="text" class="form-control" placeholder="Search">
		            </div><!-- col -->
		          </div><!-- row -->
        	</div>
        	<div class="col-lg-6">
		          <div class="row">
		            <div class="col-12">
		              <select class="custom-select" name="status">
                    <option disabled="" selected="">Choose a status</option>
                  </select>
		            </div><!-- col -->
		          </div><!-- row -->
        	</div>
        	
          <div class="col-lg-12 mt-3">
             <div class="df-example demo-table">
	            <div class="table-responsive">
	              <table class="table table-hover mg-b-0">
	                <thead>
	                  <tr>
	                    <th scope="col">User ID</th>
	                    <th scope="col">Fullname</th>
	                    <th scope="col">User Type</th>
	                    <th scope="col">Email Address</th>		                    
	                    <th scope="col">Status</th>
	                    <th scope="col">Action</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <th class="pt-3 pb-3">5878955</th>
	                    <td class="pt-3 pb-3">Dhen Mark Torreno</td>
	                    <td class="pt-3 pb-3">Admin</td>
	                    <td class="pt-3 pb-3">tdhenmark@gmail.com</td>
	                    <td class="pt-3 pb-3"><span class="bg-success p-2 rounded text-white">Active</span></td>            
	                    <td>
	                     <a data-toggle="modal" data-target="#deactivate" title="Deactivate" class="btn btn-sm btn-light text-white bg-danger">
	                         <i data-feather="user-x"></i>
	                     </a>        
	                    </td>
	                  </tr>
	                  <tr>
	                    <th class="pt-3 pb-3">5878955</th>
	                    <td class="pt-3 pb-3">Mark Cruz</td>
	                    <td class="pt-3 pb-3">Admin</td>
	                    <td class="pt-3 pb-3">tdhenmark@gmail.com</td>
	                    <td class="pt-3 pb-3"><span class="bg-danger p-2 rounded text-white">Deactivated</span></td>            
	                    <td>
	                     <a data-toggle="modal" data-target="#activate" title="Activate" class="btn btn-sm btn-light text-white bg-success">
	                         <i data-feather="user-check"></i>
	                     </a>        
	                    </td>
	                  </tr>


	                </tbody>
	              </table>
	            </div><!-- table-responsive -->
          </div><!-- df-example -->
         </div>      
       </div>
      </div><!-- container -->
    </div><!-- content -->

{{-- Modals --}}
@include('system.account-management.system-user.modals.activate')
@include('system.account-management.system-user.modals.deactivate')
@stop

@section('page-scripts')

<script type="text/javascript">
	 
</script>
@stop