@extends('admin.layouts.template');

@section('page_title')
   Unitex - All-Subcategory 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ALL Sub Category </h4>

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
                <th>Sub Category Name</th>
                <th>Category Name</th>
                <th>Product</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
                @foreach ($subcategories as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->subcategory_name}}</td>
                <td>{{$data->category_name}}</td>
                <td>{{$data->product_count}}</td>

                <td>
                    <a href="{{route('subcategory.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('subcategory.delete',$data->id)}}" class="btn btn-warning">Delete</a>
                </td>
              </tr>
                @endforeach
                      </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          {{ $subcategories->links() }}
        </div>
      </div>

    </div>
</div>      
@endsection