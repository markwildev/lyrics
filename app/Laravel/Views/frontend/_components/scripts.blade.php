

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.min.js')}}"></script>

<script src="{{asset('frontend/js/main.min.js')}}"></script>
{{--  --}}

<script type="text/javascript">

$(document).ready(function(){

// Add To Cart
   $(document).on('click','button[data-role=add_to_cart]',function(){
            var product_id = $(this).data("id");
            var product_name =  $(this).data("product")  
            var item_price =  $(this).data("price")  

        $.ajax({

            method:"POST",
            data:{ product_name: product_name,item_price: item_price,product_id: product_id },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             // url:"{{ route("frontend.products.add_to_cart") }}",
             url:"{{ route("api.transaction.store",['json']) }}",
             headers: { Authorization: 'Bearer '+localStorage.getItem("token")},
            success:function(response){
                // alert("Product added successfully")
                  console.log(response.data.qty)
                $('.cart-count').text(response.data)
                $('.cart-count').removeAttr("hidden")
                $('.cart-total-price').text(response.total_price)
                $('#addCartModal').modal('toggle')
              
            },
            error:function(data){ $('#loginModal').modal('toggle')}

        })
 
   })//End of add to cart

   
})


  function setToken(token)
  {
      return localStorage.setItem("token",token)
  }
function getUserProfie(data) {
    localStorage.setItem("user_profile",data);
}

</script>