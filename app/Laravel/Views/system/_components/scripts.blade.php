<script src="{{asset('assets/lib/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/lib/prismjs/prism.js')}}"></script>
<script src="{{asset('assets/lib/jqueryui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/lib/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('assets/lib/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/js/dashforge.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript">
  $(function(){
        'use strict'

       
        var dateFormat = 'mm/dd/yy',
        from = $('#dateFrom')
        .datepicker({
          defaultDate: '+1w',
          numberOfMonths: 2
        })
        .on('change', function() {
          to.datepicker('option','minDate', getDate( this ) );
        }),
        to = $('#dateTo').datepicker({
          defaultDate: '+1w',
          numberOfMonths: 2
        })
        .on('change', function() {
          from.datepicker('option','maxDate', getDate( this ) );
        });

        function getDate( element ) {
          var date;
          try {
            date = $.datepicker.parseDate( dateFormat, element.value );
          } catch( error ) {
            date = null;
          }

          return date;
        }


      });

    function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function() {
    readURL(this);
  });

  $(function(){
    $(".action-delete").on("click",function(){
      var btn = $(this);
      $("#btn-confirm-delete").attr({"href" : btn.data('url')});
    });
  });
</script>