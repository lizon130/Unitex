@extends('admin.layouts.template');

@section('page_title')
   Unitex - Add-product 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ADD Product</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                </div>

                {{-- error show --}}

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

              {{-- error show --}}

                <div class="card-body">
                  <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name :</label> 
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description :</label> 
                        <div class="col-sm-10">
                          <textarea class="form-control" name="short_description" id="" cols="30" rows="10"></textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Product long Description :</label> 
                        <div class="col-sm-10">
                            <textarea class="form-control" name="long_description" id="" cols="30" rows="10"></textarea>
                        </div>
                      </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category Name :</label>
                        <div class="col-sm-10">
                            <select id="product_category_id" name="product_category_id" class="form-select">
                                <option>select product Category</option>
                                @foreach ($categories as $data)
                                  <option value="{{$data->id}}">{{$data->category_name}}</option>
                                @endforeach
                                

                              </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Select Sub Category Name :</label>
                        <div class="col-sm-10">
                            <select id="product_subcategory_id" name="product_subcategory_id" class="form-select">
                                <option>select product SubCategory</option>
                                @foreach ($subcategories as $data)
                                  <option value="{{$data->id}}">{{$data->subcategory_name	}}</option>
                                @endforeach
                              </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Upload Product Image :</label> 
                        <div class="col-sm-10">       
                            <input class="form-control" type="file" id="formFile" name="product_image"/>
                        </div>
                      </div>
  
                   
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection