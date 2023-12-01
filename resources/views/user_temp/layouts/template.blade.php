<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Unitex</title>
   
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('home/img/core-img/bar.png')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('home/style.css')}}">

    <style>
            .classy-menu .classynav .sub-dropdown {
                display: none;
                position: absolute;
                top: 0;
                left: 100%;
                background: #fff;
                padding: 10px;
                z-index: 999;
                column-count: 2; /* You can adjust the number of columns as needed */
                column-gap: 20px; /* Adjust the gap between columns */
            }

            .classy-menu .classynav .dropdown li:hover > .sub-dropdown {
                display: block;
                position: absolute;
                top: 0;
                left: 100%;
                background: #fff;
                padding: 10px;
                z-index: 999;
            }

            .classy-menu .classynav .sub-dropdown li {
                display: block;
                margin-bottom: 5px;
                white-space: nowrap; /* Prevent text from wrapping onto the next line */
                overflow: hidden; /* Hide overflowing text */
                text-overflow: ellipsis; /* Add ellipsis (...) for overflow */
            }
    </style>
    
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{asset('/')}}"><img src="{{asset('home/img/core-img/unitex.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"></span>
                </div>
                <div class="classy-menu">
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul class="main-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="has-dropdown">
                                <a href="#">Category</a>
                                <ul class="dropdown">
                                    @php
                                        $categories = App\Models\Category::all();
                                    @endphp
                
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->category_name }}</a>
                
                                            {{-- Check if the category has subcategories --}}
                                            @if ($category->subcategories->count() > 0)
                                                <ul class="sub-dropdown">
                                                    @foreach ($category->subcategories as $subcategory)
                                                        <li>
                                                            <a href="{{ route('client.category', [$subcategory->id, $subcategory->slug]) }}">{{ $subcategory->subcategory_name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                        </ul>
                    </div>
                </div>

            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div> 
              
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    
    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">
       
        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="{{asset('home/img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="{{asset('home/img/product-img/product-1.jpg')}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
                
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="{{asset('home/img/product-img/product-2.jpg')}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
               
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="{{asset('home/img/product-img/product-3.jpg')}}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->
    
    <!-- ##### Welcome Area Start ##### -->

        @yield('content')
   

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{route('collection.products')}}">products</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>


                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            {{-- <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> --}}
                           
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <img style="height: 80px; width:80px" src="{{ asset('home/img/CORE-img/unitex-ft.png') }}" alt="">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    All rights reserved | Made by <a href="https://colorlib.com" target="_blank">Arman Lizon</a> & distributed by <a href="https://themewagon.com/" target="_blank">Unitex Textile (BD) Limited </a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('home/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('home/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('home/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('home/js/active.js')}}"></script>

</body>

</html>