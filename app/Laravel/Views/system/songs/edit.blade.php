@extends('system._layouts.main')

@section('content')
<div class="content content-components section-wrapper mb-5">
  <div class="pl-2 pr-2">
      <div class="tx-13 mg-b-25">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex flex-row">
            <i data-feather="skip-back" class="mt-1 mr-2"></i>
            <h3>Add Song/Lyrics</h3>
          </div>
            <p class="tx-14 mg-b-30">Song/Lyrics</p>
            <form action="" method="POST">
              <section class="mt-4">     
                  <div class="row row-sm">
                      {{ csrf_field() }}
                    </div> 
                    <div class="col-md-4 ">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" class="form-control"  value="{{ old('title',$song->title) }}">
                         @if( $errors->first('title') )
                        <span class="text text-danger">{{ $errors->first('title') }}</span>
                        @endif 
                      </div>
                    </div> 
                    
                    <div class="col-md-4 ">
                      <div class="form-group">
                        <label for="address">Artist</label>
                        <input type="text" name="artist" id="" class="form-control" value="{{ old('artist',$song->artist) }}">
                       @if( $errors->first('artist') )
                        <span class="text text-danger">{{ $errors->first('artist') }}</span>
                        @endif
                      </div>
                    </div>

                    <div class="col-md-4 ">
                      <div class="form-group">
                        <label for="lyrics">Lyrics</label>
                         <textarea name="lyrics" cols="30" id="lyrics" rows="10" class="form-control editor">{!!old('lyrics',$song->lyrics)!!}</textarea>
                          @if($errors->first('lyrics'))
                          <span class="text text-danger">{{$errors->first('lyrics')}}</span>
                          @endif
                      </div>
                    </div>

                    
        
                    <div class="col-md-12 ">
                      <button class="btn btn-dark" type="submit"><i data-feather="check-square" class="mr-2"></i>Update</button>
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

@section('page-scripts')
<script src="{{asset('assets/lib/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){
    CKEDITOR.replace( 'lyrics' );

  })
</script>
@stop