@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <<li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Main page</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Main Category</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <form action="{{route('admin.category.store')}}" class="w-25" method="POST">
                @csrf
                @error('title')
                <div class="text-danger col-12">{{$message}}</div>
                @enderror
                <div class="col-12">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category name</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                        <input type="submit" class="btn btn-primary mt-2" value="Add">
                        <a href="{{route('admin.category.index')}}" class="btn btn-success mt-2 ml-1">Back</a>
                    </div>

                </div>
                </div>
            </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
