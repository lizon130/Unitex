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
                        <h1> {{$subcategory->subcategory_name}} </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
    <div class="col-12 col-md-8 col-lg-9">
        <div class="shop_grid_product_area">
    <div class="row">

        @foreach ($product as $data)

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-product-wrapper">
                <!-- Product Image -->
                <div class="product-img text-center">
                    <img style="height: 200px; width: 300px; " src="{{ asset($data->product_image) }}" alt="">

                </div>

                <!-- Product Description -->
                <div class="product-description">
                        <p style="text-transform: uppercase; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold;">{{$data->product_name}}</p><br>         
                        <span>{{ $data->short_description}}</span> <br>
                        <br>
                        <span>{{$data->long_description}}</span>              
                </div>
            </div>
        </div>
        @endforeach
    </div>   
    {{ $product->links() }}
</div>
</div>
</div>
</div>

</div>

@endsection