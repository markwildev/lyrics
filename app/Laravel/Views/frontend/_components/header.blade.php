<header class="header">
    <div class="header-top">
        <div class="container">
           
            <div class="header-right">
                <p class="welcome-msg">Welcome to Oriedecon Microsoft! </p>

                <div class="header-dropdown dropdown-expanded">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="my-account.html">How it works </a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">FAQS </a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle"> 
        <div class="container">
            <div class="header-left">
                <a href="{{route('frontend.home.index')}}" class="logo">
                    <img src="{{asset('logo/oriedecon-MS.png')}}" style="height: 50px;width: auto;" alt="Logo">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            <div class="select-custom">
                                <select>
                                    <option value="">All Products</option>
                                    <option value="4">- MS Office</option>
                                    <option value="12">- Operating</option>
                                    <option value="13">- Office Apps</option>
                                    <option value="66">- Security</option>
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div><!-- End .headeer-center -->

            <div class="header-right">
                <button class="mobile-menu-toggler" type="button" >
                    <i class="icon-menu"></i>
                </button>
                <div class="header-contact">
                    <span>Call us now</span>
                    <a href="tel:#"><strong>+123 5678 890</strong></a>
                </div><!-- End .header-contact -->

                <div class="dropdown cart-dropdown"   >
                    <a href="#" class="dropdown-toggle" data-role="load" data-role="load" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          @if (Auth::check())
          {{-- @if (count(auth()->user()->transaction) > 0) --}}
          <span class="cart-count"  {{count(auth()->user()->cart) > 0 ? "" : "hidden"}} >
           {{count(auth()->user()->cart) > 0 ? auth()->user()->cart->qty : ""}}
        </span>  
        {{-- @endif                 --}}
        @endif 
    
                    </a>
                    @if (Auth::check())
                        {{-- expr --}}
                    <div class="dropdown-menu" id="" id="my_cart" >
                        <div class="dropdownmenu-wrapper" >
                            <div class="dropdown-cart-products cart-max--height" >
                             
                    
                                @foreach ($items as $item)
                                        @foreach ($item->details as $detail)
                                            {{-- expr --}}
                                      
                                <div class="product" id="item_list">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="{{route('frontend.products.show')}}">{{ $detail->product_name }}</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{$detail->qty}}</span>
                                            x PHP {{ number_format($detail->item_price,2)  }}  
                                        </span>
                                    </div><!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="{{route('frontend.products.show')}}" class="product-image">
                                            <img src="{{ $detail->product->products->directory  }}/{{ $detail->product->products->filename }}" alt="product">
                                        </a>
                                        {{-- <button data-id="{{ $detail->product->id }}" data-role="load"
                                             class="btn-remove" title="Remove Product"><i class="icon-cancel"></i>
                                         </button> --}}
                                    </figure>
                                </div><!-- End .product -->
                                      {{-- expr --}}
                                @endforeach
                                @endforeach

                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">{{ count(auth()->user()->transaction) > 0 ? number_format(auth()->user()->transaction->total_price,2) : "0.00"}}</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{route('frontend.products.cart')}}" class="btn">View Cart</a>
                                <a href="{{route('frontend.products.checkout')}}" class="btn">Checkout</a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdownmenu-wrapper -->
                    </div><!-- End .dropdown-menu -->
                       @endif
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="{{ Request::segment(1) == NULL ? "active " : " "   }}"><a href="{{route('frontend.home.index')}}">Home</a></li>
                    <li class="{{ Request::segment(1) == "about" ? "active " : " "   }}" ><a href="{{route('frontend.about.index')}}">About</a></li>       
                    <li class="{{ Request::segment(1) == "products" ? "active " : " "   }}"><a href="{{route('frontend.products.index')}}">Products</a></li> 
                    <li><a href="{{route('frontend.blogs.index')}}">Blogs</a></li>            
                    <li><a href="{{route('frontend.products.index')}}" class="sf-with-ul">Shop All</a>
                        <ul>
                            <li><a href="{{route('frontend.products.index')}}">MS Office</a></li>
                            <li><a href="{{route('frontend.products.index')}}">Operating</a></li>
                            <li><a href="{{route('frontend.products.index')}}">Office Apps</a></li>
                            <li><a href="{{route('frontend.products.index')}}">Security</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('frontend.contact.index')}}">Contact Us</a></li> 
                    <li {{ Auth::check() ? "hidden" : "" }} class="float-right"><a href="{{route('frontend.auth.login')}}">Login / Register</a></li>  
                    {{-- Login Account --}}
                    @if (Auth::check())
                        {{-- expr --}}
                    <li  class="float-right"><a href="#" class="sf-with-ul">Hi! {{ auth()->user()->name }}</a>
                        <ul>
                            <li><a href="#">Dashboard</a></li>                      
                            <li><a href="{{route('frontend.my_account.address_book')}}">Address Book</a></li>
                            <li><a href="{{route('frontend.my_account.my_orders')}}">My Orders</a></li>
                            <li><a href="{{route('frontend.my_account.my_transaction')}}">My Transaction</a></li>
                            <li><a href="{{route('frontend.my_account.settings')}}">Account Information</a></li>   
                            <li><a href="{{ route('frontend.auth.logout') }}">Logout</a></li>
                        </ul>
                    </li> 
                      @endif
                </ul>
            </nav>
        </div><!-- End .header-bottom -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body add-cart-box text-center">
        <p><strong>Congratulation!</strong>&nbsp; Item has been added to your cart.</p>
        <h4 id="productTitle"></h4>
        <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
        <div class="btn-actions">
            <a href="{{route('frontend.products.cart')}}"><button class="btn-primary">Go to cart page</button></a>
            <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <center>
        <p><strong>Please Login your Account To Proceed.</p>
            <span class="alert alert-danger" id="error" hidden=""></span>
        <form action="" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="button" data-role="login">Login</button>
            </div> 
             
        </form>
     </center>
    </div>
  </div>
</div>



<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.min.js')}}"></script>
<script type="text/javascript">


       $(document).on('click','a[data-role=logout]',function(){

            
        
        })



       

</script>
