@extends('admin.layouts.template');

@section('page_title')
   Unitex - Allsub-Category 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ADD Sub Category</h4>

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

                  <form action= "{{route('subcategory.store')}}" method="POST">
                    @csrf

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="subcategory_name"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category Name :</label>
                        <div class="col-sm-10">
                            <select id="category_id" name="category_id" class="form-select">
                                <option>Default select</option>
                                @foreach ($categories as $data)
                                <option value="{{$data->id}}">{{$data->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                   
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add Sub Category</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection