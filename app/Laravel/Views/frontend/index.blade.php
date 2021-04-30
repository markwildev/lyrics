@extends('frontend._layouts.main') 
@section('content')
 <div class="page-wrapper">
        @include('frontend._components.header') 
        <main class="main">
            <div class="home-slider-container">
                <div class="home-slider owl-carousel owl-theme owl-theme-light">
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src="frontend/images/slider/slide-1.jpg"></div><!-- End .slide-bg -->
                        <div class="container">
                            <div class="home-slide-content">
                                <div class="slide-border-top">
                                    <img src="frontend/images/slider/border-top.png" alt="Border" width="290" height="38">
                                </div><!-- End .slide-border-top -->
                                <h3>80% off for select items</h3>
                                <h1>Lorem ipsum</h1>
                                <a href="category.html" class="btn btn-primary">Shop Now</a>
                                <div class="slide-border-bottom">
                                    <img src="frontend/images/slider/border-bottom.png" alt="Border" width="290" height="111">
                                </div><!-- End .slide-border-bottom -->
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .container -->
                    </div><!-- End .home-slide -->

                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src="frontend/images/slider/slide-2.jpg"></div><!-- End .slide-bg -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-8 col-md-6 text-center slide-content-right">
                                    <div class="home-slide-content">
                                        <h3>up to 70% off</h3>
                                        <h1>Lorem ipsum</h1>
                                        <a href="category.html" class="btn btn-primary">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .container -->
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>RETURNS AND EXCHANGES FOR 30 DAYS</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->
            
            <div class="banners-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#{{route('frontend.products.index')}}">
                                    <img src="frontend/images/banners/banner-1.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="{{route('frontend.products.index')}}">
                                    <img src="frontend/images/banners/banner-2.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="{{route('frontend.products.index')}}">
                                    <img src="frontend/images/banners/banner-3.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banneers-group -->
            
            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">FEATURED PRODUCTS</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        
                        
                    </div><!-- End .featured-proucts -->
                </div><!-- End .container -->
            </div><!-- End .featured-proucts-section -->

            <div class="mb-5"></div><!-- margin -->

            <div class="carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">New Arrivals</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default text-center">
                            <figure>
                                <a href="{{route('frontend.products.show')}}">
                                    <img src="https://msofficeworks.com/wp-content/uploads/2017/01/microsoft-office-plus-2016-500-500.png" alt="product">
                                </a>
                            </figure>
                            <div class="product-details">               
                                <h2 class="product-title font-semibold text-uppercase text-limit--title">
                                    <a class="text-size--14" href="{{route('frontend.products.show')}}">Microsoft 2006</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price text-blue mr-1 text-size--18">$9.00</span>
                                     <span class="product-price text-line-through text-gray text-size--18">$19.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">         
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                  
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        
                        
                    </div><!-- End .featured-proucts -->
                </div><!-- End .container -->
            </div><!-- End .carousel-section -->

            <div class="mb-5"></div><!-- margin -->

            <div class="info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>

                                <div class="feature-box-content">
                                    <h3>Customer Support<span>Need Assistence?</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->
                        
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>

                                <div class="feature-box-content">
                                    <h3>secured payment <span>Safe & Fast</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.consectetur adipiscing elit. </p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>

                                <div class="feature-box-content">
                                    <h3>Returns <span>Easy & Free</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>
                                </div><!-- End .feature-box-content -->
                            </div><!-- End .feature-box -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .info-section -->

            <div class="promo-section" style="background-image: url(frontend/images/promo-bg.jpg)">
                <div class="container">
                    <h3>Lorem ipsum dummy text</h3>
                    <a href="{{route('frontend.products.index')}}" class="btn btn-dark">Shop Now</a>
                </div><!-- End .container -->
            </div><!-- End .promo-section -->

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/1.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/3.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/4.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/5.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="frontend/images/logos/1.png" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->

            <div class="blog-section">
                <div class="container">
                    <h2 class="h3 title text-center">From the Blog</h2>

                    <div class="blog-carousel owl-carousel owl-theme">
                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                    <img src="frontend/images/blog/home/post-1.png" alt="Post">
                                </a>
                                <div class="entry-date">29<span>Now</span></div><!-- End .entry-date -->
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <h3 class="entry-title">
                                    <a href="single.html">New Collection</a>
                                </h3>
                                <div class="entry-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                    <a href="single.html" class="btn btn-dark">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                    <img src="frontend/images/blog/home/post-2.png" alt="Post">
                                </a>
                                <div class="entry-date">30 <span>Now</span></div><!-- End .entry-date -->
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <h3 class="entry-title">
                                    <a href="single.html">Fashion Trends</a>
                                </h3>
                                <div class="entry-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                    <a href="single.html" class="btn btn-dark">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <div class="entry-media">
                                <a href="single.html">
                                    <img src="frontend/images/blog/home/post-3.png" alt="Post">
                                </a>
                                <div class="entry-date">28 <span>Now</span></div><!-- End .entry-date -->
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <h3 class="entry-title">
                                    <a href="single.html">Women Fashion</a>
                                </h3>
                                <div class="entry-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>

                                    <a href="single.html" class="btn btn-dark">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .blog-carousel -->
                </div><!-- End .container -->
            </div><!-- End .blog-section -->
        </main><!-- End .main -->
        @include('frontend._components.footer') 
       
    </div><!-- End .page-wrapper -->
    @include('frontend._components.mobile_header') 
   

@stop

