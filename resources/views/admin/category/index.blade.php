@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category List</li>
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

                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Category List</h3>
                                    <a href="{{ route('create') }}" class="btn btn-primary">Create Category</a>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Post Count</th>

                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->id }}</td>

                                                <td class='d-flex'>
                                                    <a href="{{ route('edit', [$category->id]) }}"
                                                        class="btn btn-sm
                                                        btn-primary mr-1"><i
                                                            class="fas  fa-edit"></i></a>
                                                    <a href="{{ route('delete', [$category->id]) }}"
                                                        class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
                                                    {{-- <a href="{{ route('show', [$category->id]) }}"
                                                        class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a> --}}
                                                </td>

                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-danger" style="width: 55%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger">55%</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
