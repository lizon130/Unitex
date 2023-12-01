@extends('user_temp.layouts.template')

{{-- @section('page_title')
   Unitex - Add-Category 
@endsection --}}

@section('content')
<section class="welcome_area bg-img background-overlay" style="background-image: url({{asset('home/img/bg-img/bgkt.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content">
                    <h6>All Collections</h6>
                    {{-- <h4 font color="white" >Collections</h4> --}}
                    <a href="{{route('collection.products')}}" class="btn essence-btn">view collection</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
<div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"  style="  background-image: url({{asset('home/img/bg-img/bg-den.jpg')}});">
                    <div class="catagory-content">
                        <a href="https://en.wikipedia.org/wiki/Denim" target="_blank">Denim</a>

                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('home/img/bg-img/bg-vis.jpg')}});">
                    <div class="catagory-content">
                        <a href="https://en.wikipedia.org/wiki/Rayon">Viscos</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('home/img/bg-img/bg-lil.jpg')}});">
                    <div class="catagory-content">
                        <a href="https://en.wikipedia.org/wiki/Linen">Linen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Catagory Area End ##### -->



<!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-50 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">

                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{asset('home/img/product-img/cot-1.jpg')}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{asset('home/img/product-img/cot-2.jpg')}}" alt="">
                           
                        </div>
 
                    </div>
                    
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{asset('home/img/product-img/ctt-7.jpg')}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src=" {{asset('home/img/product-img/cot-6.jpg')}}" alt="">
                           
                        </div>
                        
                    </div>
                    
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{asset('home/img/product-img/ctt-3.jpg')}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{asset('home/img/product-img/cot-5.jpg')}}" alt="">

                        </div>
                        
                    </div>
                    
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{asset('home/img/product-img/ctt-10.jpg')}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{asset('home/img/product-img/cot-8.jpg')}}" alt="">

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### Brands Area Start ##### -->
<div class="brands-area d-flex align-items-center justify-content-between">

    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="{{asset('home/img/core-img/picture1.png')}}" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="{{asset('home/img/core-img/picture2.png')}}" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="{{asset('home/img/core-img/picture3.png')}}" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="{{asset('home/img/core-img/picture4.png')}}" alt="">
    </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('home/img/core-img/picture5.png')}}" alt="">
        </div>
</div>
<!-- ##### Brands Area End ##### -->
@endsection