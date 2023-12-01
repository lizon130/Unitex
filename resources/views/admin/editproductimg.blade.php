@extends('admin.layouts.template');

@section('page_title')
   Unitex - Add product Image 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ADD Product Image</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                </div>

                <div class="card-body">
                  <form action="{{route('product.imgupdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Previous Product Image :</label> 
                        <div class="col-sm-10">       
                           <img style="height: 100px" src="{{asset($product_info->product_image)}}" alt="">
                        </div>
                      </div>

                      <input type="hidden" value="{{$product_info->id}}" name="id">

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Upload New Image :</label> 
                        <div class="col-sm-10">       
                            <input class="form-control" type="file" id="formFile" name="product_image"/>
                        </div>
                      </div>
  
                   
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Product Image</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection