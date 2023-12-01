@extends('user_temp.layouts.template')

{{-- @section('page_title')
   Unitex - Add-Category 
@endsection --}}

@section('content')
<div class="breadcumb_area bg-img" style="background-image: url({{asset('home/img/bg-img/breadcumb.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2> All Products</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu collapse show">
                                <!-- Single Item -->
                                <li data-toggle="collapse" data-target="#clothing">
                                    <a href="{{route('collection.products')}}">products</a>
                                    
                                    <ul class="sub-menu collapse show" id="clothing">

                                        @php
                                            $categories = App\Models\Category::all();
                                        @endphp

                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="#">{{$category->category_name}}</a>

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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    
                                </div>
                                <!-- Sorting -->
                                <div class="product-sorting d-flex">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                                @foreach ($product as $data)

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img style="" src="{{$data->product_image}}" alt="">
                                        </div>
        
                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <p style="text-transform: uppercase; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold;">{{$data->product_name}}</p><br>         
                                            <span>{{ $data->short_description}}</span> <br>
                                            <span>{{$data->long_description}}</span>              
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Pagination -->
                {{ $product->links() }}
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->
@endsection

