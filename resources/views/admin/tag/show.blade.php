@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{$tag->title}}</h1>
                    <a href="{{route('admin.tag.edit',$tag->id)}}"><i class="fas fa-pencil-alt text-success"></i></a>
                    <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash text-danger"></i>
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Main page</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Main Tag</a></li>
                        <li class="breadcrumb-item">{{$tag->title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of tags</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$tag->id}}</td>
                            </tr>
                            <tr>
                            <td>Title</td>
                            <td>{{$tag->title}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>
        <div class="row col-12">
            <div class="col-1 mb-3">
                <a href="{{route('admin.tag.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
