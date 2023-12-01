@extends('admin.layouts.template');

@section('page_title')
   Unitex - All-Product 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ALL Product</h4>

      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> <a href="{{route('product.add')}}" class="btn btn-success btn-sm">Add Products</a></h4>

        {{-- message show --}}
        @if(session()->has('message'))
          <div class="alert alert-success">
              {{session()->get('message')}}
          </div>
        @endif  
      {{-- message show --}}

      <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
               @foreach ($products as $data)     
               <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->product_name}}</td>
                <td>
                  <img style="height: 100px" src="{{asset($data->product_image)}}" alt="">
                  <br>
                  <br>
                  <a href="{{route('product.img',$data->id)}}" class="btn btn-primary btn-sm">Update Image</a>
                </td>
                <td>{{$data->short_description}}</td>
                <td>{{$data->long_description}}</td>
                  <td>
                      <a href="{{route('product.edit',$data->id )}}" class="btn btn-primary btn-sm">Edit</a> <br> <br>
                      <a href="{{route('product.delete',$data->id)}}" class="btn btn-warning btn-sm">Delete</a>
                  </td>
                
              </tr>
              @endforeach 
                      </div>
                      
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          {{ $products->links() }}
        </div>
      </div>

    </div>
</div>      
@endsection