@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Website</a></li>
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
            <form action="{{route('admin.user.store')}}" class="w-25" method="POST">
                @csrf
                <div class="col-12">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="User name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror
                    <div>
                        <div class="form-group w-50">
                            <label>Choose role</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == old('role') ? 'selected' : ''}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger col-12">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary mt-2" value="Add">
                        <a href="{{route('admin.user.index')}}" class="btn btn-success mt-2 ml-1">Back</a>
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
