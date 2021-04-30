@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
  <div class="pl-2 pr-2">
      <div class="tx-13 mg-b-25">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex flex-row">
            <i data-feather="skip-back" class="mt-1 mr-2"></i>
            <h3>Stock</h3>
          </div>
            <p class="tx-14 mg-b-30">Inventory</p>
            <form >
              <div class="row">   			
                
                {{-- <div class="col-lg-6">
                    <div class="d-flex flex-row">
                       <select class="form-control" name="status">
                <option disabled="" selected="" class="select2">Choose Category</option>
                @foreach ($products as $product )
                       <option value="{{ $product->product_code }}">{{ $product->product_description }}</option>
                @endforeach
                      
                       </select>    
                    <button class="btn btn-primary ml-2"><i data-feather="search"></i></button>
                     <a class="btn btn-primary ml-2" href="#">Clear</a>
                    </div><!-- row -->
                </div>     		 --}}
              </div>
            </form>  
            
            <div class="row">
        	
              <div class="col-lg-12 mt-3">
                @include('system._components.notifications')
                 <div class="df-example demo-table">
                  <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                      <thead>
                        <tr>
                           <th scope="col">Product Name</th>
                          <th scope="col">Product Code</th>                        
                          <th scope="col">Action</th>                        
                        </tr>
                      </thead>
                      <tbody>
                {{-- @foreach($products as $product)
                  <tr>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->product_code }}</td>
                  <td> <a href="#">Add Stock</a> </td>
                  </tr>
                @endforeach --}}
          
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
              </div><!-- df-example -->
             </div>      
           </div>
             </div>
           </div>
      </div>
  </div><!-- container -->
</div><!-- content -->
@stop