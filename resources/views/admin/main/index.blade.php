@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Main Page</h1>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$data['usersCount']}}</h3>
                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">Details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-gray">
                        <div class="inner">
                            <h3>{{$data['postsCount']}}</h3>

                            <p>Posts</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard "></i>
                        </div>
                        <a href="{{route('admin.post.index')}}" class="small-box-footer">Details<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-yellow">
                        <div class="inner">
                            <h3>{{$data['categoriesCount']}}</h3>

                            <p>Categories</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <a href="{{route('admin.category.index')}}" class="small-box-footer">Details<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-red">
                        <div class="inner">
                            <h3>{{$data['tagsCount']}}</h3>

                            <p>Tags</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <a href="{{route('admin.tag.index')}}" class="small-box-footer">Details<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
               </div>

                <!-- ./col -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
