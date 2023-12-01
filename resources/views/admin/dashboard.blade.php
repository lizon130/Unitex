@extends('admin.layouts.template');

@section('page_title')
   Unitex - Dashboard 
@endsection


@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> DASHBOARD</h4> 
      
      
         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <a href="{{route('category.index')}}" class="btn btn-info">View Category</a>
                  <a href="{{route('subcategory.index')}}" class="btn btn-dark">View Sub Category</a>
                  <a href="{{route('product.index')}}" class="btn btn-success">View Products</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>                  
@endsection
