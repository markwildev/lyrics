@extends('system._layouts.main')

@section('content')
    <div class="content content-components mb-5">
      <div class="row">
        <div class="col-lg-12 col-xl-12 mg-t-10">
            <div class="mg-b-10">
              <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
                <div>
                  <h4 class="mg-b-5">Dashboard</h4>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-y-30">
                <div class="row mt-5">
                  <div class="col-lg-4">  </div>
                  <div class="col-lg-4">  
                   {{-- <center><img src="{{  asset('assets/images/janlex.png') }}" style="width:100%; max-width:300px;"></center>  --}}
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="d-flex justify-content-center">Welcome</h1>
                    <h2 class="d-flex justify-content-center">to</h2>
                    <h2 class="d-flex justify-content-center">LARAVEL FUNDAMENTAL SKILL TEST</h2>
                    <h5 class="d-flex justify-content-center">Hello!&nbsp;</span><span>{{ Auth::user()->name }}</h5>
                  </div>
                </div>
                {{-- <div class="row mt-5">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4">
                    <center><h3>Welcome</h3></center>
                    <center><h4>To</h4></center>
                    <center><h2><strong><img src="{{  asset('assets/images/janlex.png') }}" style="width:100%; max-width:300px;"></h2></center>
                  <center><h3>Inventory System</h3></center>
	                  <center><span>Hello!&nbsp;</span><span>{{ Auth::user()->name }}</span></center>
                  </div> --}}
                



                  {{-- <div class="media col-lg-4">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-primary tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-6">
                      <i data-feather="bar-chart-2"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold tx-nowrap mg-b-5 mg-md-b-8">Modules</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">32</h4>
                    </div>
                  </div>
                  <div class="media col-lg-4">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-warning tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-5">
                      <i data-feather="bar-chart-2"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Modules</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">32</h4>
                    </div>
                  </div>
                  <div class="media col-lg-4">
                    <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-success tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-4">
                      <i data-feather="bar-chart-2"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Modules</h6>
                      <h4 class="tx-20 tx-sm-18 tx-md-24 tx-normal tx-rubik mg-b-0">32</small></h4>
                    </div>
                  </div> --}}
                </div>
              </div><!-- card-body -->
              
            </div><!-- card -->            
          </div><!-- col -->       
            {{-- <div class="col-lg-12 mt-3">
               <div data-label="Recent Transactions" class="df-example demo-table">
                <div class="table-responsive">
                  <table class="table table-hover mg-b-0">
                   <thead>
                    <tr>
                      <th scope="col">Table Header</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="pt-3 pb-3">table Data</th>
                                              
                      <td>
                       <a href="#" class="btn btn-sm btn-light text-white bg-success">
                           <i data-feather="eye"></i>
                       </a>
                   
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div>
            </div> --}}

      </div><!-- container -->
    </div><!-- content -->
@stop