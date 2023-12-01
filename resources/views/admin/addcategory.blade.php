@extends('admin.layouts.template');

@section('page_title')
   Unitex - Add-Category 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ADD Category</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                </div>

                <div class="card-body">

                  {{-- error message start --}}

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  {{-- error message end --}}

                  <form action="{{route('category.store')}}" method="POST">
                    @csrf

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="category_name" placeholder="Enter the Category Name" />
                      </div>
                    </div>

                   
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection