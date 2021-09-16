@extends('admin.layouts.layout')

@section('content')
     
        <!-- Content Header (Page header) -->
        
    
        <!-- Main content -->
        <section class="content">
    
          
            <div class="card-body">
                        <h1>Categories</h1>

                <a href="{{ route('categories.create') }}" class="btn btn-success" style="margin-right: 20px; margin-bottom: 20px;">Create category</a>

                @if (!empty($categories))
                    

                <table class="table text-center">
                    <tr style="width: 100%;">
                        <th style="width: 10%;">ID</th>
                        <th style="width: 35%;">Title</th>
                        <th style="width: 35%;">Slug</th>
                        <th style="width: 20%;">Function</th>
                    
                    </tr>
                    @foreach ($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            
                            <td>
                              <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">Edit</a>
                              <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete this category')">Delete</button>
                              </form>
                            </td>
                        </tr>
                            
                      @endforeach
                </table>

                @else
                    <p>There are not categories</p>
                @endif

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              {{ $categories->links() }}
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
    
        </section>
        <!-- /.content -->
     
@endsection