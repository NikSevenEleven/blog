@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Comment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Main page</a></li>
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
                <form action="{{route('personal.comment.update', $comment->id)}}" class="w-50" method="POST">
                    @csrf
                    @method('PATCH')
                    @error('message')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror

                            <div class="form-group">
                                <textarea class="form-control" name="message" cols="30">{{$comment->message}}</textarea>
                                <input type="submit" class="btn btn-primary mt-2" value="Edit">
                                <a href="{{route('personal.comment.index',$comment->id)}}" class="btn btn-success mt-2 ml-1">Back</a>
                            </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
