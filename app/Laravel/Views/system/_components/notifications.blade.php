@if(session()->has('notification-status'))
  @if(session()->get('notification-status') == "success")
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{-- <strong>Holy guacamole!</strong> --}} {{session()->get('notification-msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  
  @endif

  @if(session()->get('notification-status') == "info")
  <div class="alert alert-info alert-dismissible fade show" role="alert">
  {{-- <strong>Holy guacamole!</strong> --}} {{session()->get('notification-msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  
  @endif

  @if(session()->get('notification-status') == "warning")
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{-- <strong>Holy guacamole!</strong> --}} {{session()->get('notification-msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  
  @endif

  @if(session()->get('notification-status') == "failed" OR session()->get('notification-status') == "error")
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{-- <strong>Holy guacamole!</strong> --}} {{session()->get('notification-msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  
  @endif
@endif
