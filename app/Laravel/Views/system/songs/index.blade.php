@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
      <div>
        <div class="d-flex justify-content-md-between mb-2">
          <h4 id="section1" class="mb-3 mb-lg-0 mb-md-0 mb-xl-0">Song List</h4>
          <a href="{{ route('system.song_list.create') }}" class="btn btn-dark mg-b-10 font-small">
            <i data-feather="plus" class="mr-2"></i>Add Song
      </a>
      {{-- <a href="{{ route('system.product.create') }}" class="btn btn-primary mg-b-10 font-small">
      <i data-feather="check-square" class="mr-2"></i>Add Product
    </a> --}}
    </div>
    
    
       {{--  <form >
            <div class="row">         
              
              <div class="col-lg-6">
                  <div class="d-flex flex-row">
              <input type="text" name="supplier_name" id="" class="form-control"  placeholder="Filter by Artist" value="{{ old('supplier_name') }}">    
                  <button class="btn btn-dark ml-2"><i data-feather="search"></i></button>
              <a class="btn btn-danger ml-2" href="#">Clear</a>
                  </div><!-- row -->
              </div>        
            </div>
          </form> --}}
        <div class="row">
          
          <div class="col-lg-12 mt-3">
            @include('system._components.notifications')
             <div class="df-example demo-table">
       
       
        <div class="table-responsive">
          <table class="table table-dark table-bordered mg-b-0">
            <thead>
            <tr>
               <th scope="col">Title</th>
              <th scope="col">Artist</th>
              <th scope="col">Date Created</th>

              <th scope="col">Action</th>      
            </tr>
            </thead>
            <tbody>
              @foreach ($songs as $song)
              <tr>
                <td>{{ strtoupper($song->title) }}</td>              
                <td>{{ strtoupper($song->artist) }}</td>              
                {{-- <td>{!! str_limit($song->lyrics,)  !!}</td>               --}}
                <td>{{ date('M d, Y'),strtotime($song->created_at)}}</td>              
                        
                <td width="10%"><a href="{{ route('system.song_list.edit',[$song->id]) }}">Edit</a> | <a href="{{ route('system.song_list.delete',[$song->id]) }}" id="delete">Delete</a> </td>   
              </tr>
           
              @endforeach
            </tbody>
          </table>
          </div><!-- table-responsive -->
   
          
          </div><!-- df-example -->
         </div>      
       </div>
      </div><!-- container -->
    </div><!-- content -->

{{-- Modals --}}
{{-- @include('system.roster.modals.activate')
@include('system.roster.modals.deactivate') --}}
@stop

@section('page-scripts')

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','a[data-role=delete]',function(){
      var url = $(this).data("url")
      $('#confirm_delete').attr({"href": url});
    })

    $(document).on('click','a[data-role=edit]',function(){
      let This = $(this);
      let url = $(this).data("url");
      This.attr({"href": url+"?supplier_id="+This.data("id")})
      
    })

    $('#delete').on('click',function(){
      if(confirm("Are you sure want to delete this song?") == true){
        return true;
      }else{
        return false;
      }
    })

  })
</script>

<script type="text/javascript">
</script>
@stop