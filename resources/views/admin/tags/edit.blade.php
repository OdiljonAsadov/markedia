@extends('admin.layouts.layout')

@section('content')
     
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Edit Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                  <li class="breadcrumb-item active">Blank Page</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: -2vh; height: 42vh">
                <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
                    <h3 class="card-title">Edit {{ $tag->title }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                <form action="{{ route('tags.update', ['tag' => $tag->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $tag->title }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                </form>
            </div>
            <!-- /.card-body -->
           
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
    
        </section>
        <!-- /.content -->
      
@endsection