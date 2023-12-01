@extends('admin.layouts.template');

@section('page_title')
   Unitex - All-Category 
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> ALL Category</h4>
      <div class="card">

      {{-- message show --}}
        @if(session()->has('message'))
          <div class="alert alert-success">
              {{session()->get('message')}}
          </div>
        @endif  
      {{-- message show --}}

        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Sub Category</th>
                <th>Slug</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach($categories as $data)

              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->category_name}}</td>
                <td>{{$data->subcategory_count}}</td>
                <td>{{$data->slug}}</td>
                <td>
                    <a href="{{route('category.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('category.delete',$data->id)}}" class="btn btn-warning">Delete</a>
                </td>  
              </tr>
              @endforeach
            
                      </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          {{ $categories->links() }}
        </div>
      </div>

    </div>
</div>      
@endsection