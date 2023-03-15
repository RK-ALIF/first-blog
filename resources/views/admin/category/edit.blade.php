@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Category </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ asset('/category') }}">Go Back Category List</a></li>

                        <li class="breadcrumb-item active">Edit Category </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-header">

                                {{-- <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Edit Category </h3>
                                    <a href="{{ route('edit') }}" class="btn btn-primary">Edit Category</a>
                                </div> --}}
                            </div>

                            <div class="card-body p-0">

                                <form action="{{ route('update') }}" method="POST">
                                    @csrf

                                    <div class="card-body">
                                        @include('include.errors')

                                        <div class="form-group">

                                            <input type="hidden" name="id" value={{ $category['id'] }}>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="name" name="name"class="form-control"
                                                value="{{ $category['name'] }}" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Category Description</label>
                                            <textarea name="description" rows="4" class="form-control" placeholder="Enter Description">{{ $category['description'] }}"</textarea>
                                        </div>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
