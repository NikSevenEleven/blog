@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Main page</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Main Category</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of categories</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th colspan="3" class="text-center">Usage</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td class="text-center"><a href="{{route('admin.category.show',$category->id)}}"><i class="far fa-eye"></i></a></td>
                                <td class="text-center"><a href="{{route('admin.category.edit',$category->id)}}"><i class="fas fa-pencil-alt text-success"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-1 mb-3">
                    <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Add</a>
                </div>
                <div class="col-1 mb-3">
                <a href="{{route('admin.main.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
