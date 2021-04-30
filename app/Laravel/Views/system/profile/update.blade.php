@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
  <div class="pl-2 pr-2">
      <div class="tx-13 mg-b-25">
        <div class="row">
          <div class="col-lg-8">
            <div class="d-flex flex-row">
            <i data-feather="skip-back" class="mt-1 mr-2"></i>
            <h3>Create Product Category</h3>
          </div>
            <p class="tx-14 mg-b-30">Fill out the form below to create your product keys.</p>
               <form action="" method="POST">
              <section class="mt-4">     
                  <div class="row row-sm">

                 
                      {{ csrf_field() }}
                  {{--   <div class="form-group col-md-12">
                      <label class="text-uppercase font-weight-bold">Product</label>
                      <select class="custom-select" name="type">
                        <option></option>
                      </select>
                    </div> --}}
                    <div class="form-group col-md-12">
                      <label class="text-uppercase font-weight-bold">Product Category Name</label>  

                      <input type="text" class="form-control" name="category_name" autocomplete="off" value="{{ $category->category_name }}">
                      @if($errors->has("category_name"))
                      <span class="text text-danger">{{ $errors->first("category_name") }}</span>
                      @endif
                    </div>   
                    {{-- <div class="form-group col-md-12">
                      <label class="text-uppercase font-weight-bold">Product Expiration Date</label>                  
                      <input type="date" class="form-control" name="title">
                    </div>  --}}     
                    <div class="col-md-12 text-right">
                      <button class="btn btn-primary" type="submit"><i data-feather="check-square" class="mr-2"></i>Update</button>
                    </div>  
                  
                  </div><!-- row -->
               </section>
                 </form>      
             </div>
           </div>
      </div>
  </div><!-- container -->
</div><!-- content -->
@stop