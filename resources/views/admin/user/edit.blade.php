@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Main page</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Main Users</a></li>
                        <li class="breadcrumb-item">{{$user->name}}</li>
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
            <form action="{{route('admin.user.update', $user->id)}}" class="w-25" method="POST">
                @csrf
                @method('PATCH')
                @error('name')
                <div class="text-danger col-12">{{$message}}</div>
                @enderror
                <div class="col-12">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="User name"
                        value="{{$user->name}}">
                        @error('name')
                        <div class="text-danger col-12">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{$user->email}}">
                        </div>
                        @error('email')
                        <div class="text-danger col-12">{{$message}}</div>
                        @enderror

                        <div class="form-group w-50">
                            <label>Choose role</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == $user->role ? 'selected' : ''}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger col-12">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        </div>
                        <input type="submit" class="btn btn-primary mt-2" value="Edit">
                        <a href="{{route('admin.user.show',$user->id)}}" class="btn btn-success mt-2 ml-1">Back</a>
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
