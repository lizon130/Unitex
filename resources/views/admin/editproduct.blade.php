@extends('admin.layouts.template');

@section('page_title')
   Unitex - Edit product 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Edit Product</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

                <div class="card-body">
                  <form action="{{route('product.update')}}" method="POST">           
                    @csrf

                    <input type="hidden" value="{{$product_info->id}}" name="id">

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name :</label> 
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name" placeholder="John Doe" value="{{$product_info->product_name}}"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description :</label> 
                        <div class="col-sm-10">
                          <textarea class="form-control" name="short_description" id="" cols="30" rows="10">{{$product_info->short_description}}</textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Product long Description :</label> 
                        <div class="col-sm-10">
                            <textarea class="form-control" name="long_description" id="" cols="30" rows="10">{{ $product_info->long_description}}</textarea>
                        </div>
                      </div>

                   
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">update Product</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection