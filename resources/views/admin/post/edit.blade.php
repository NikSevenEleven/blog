@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Post</h1>
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
            <form action="{{route('admin.post.update', $post->id)}}" class="w-50" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @error('title')
                <div class="text-danger col-12">{{$message}}</div>
                @enderror
                <div class="col-12">
                <div class="card-body">
                    <div class="form-group w-50">
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Post name"
                               value="{{$post->title}}"
                        >
                        @error('title')
                        <div class="text-danger col-12">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group" >
                        <textarea id="summernote" name="content">{{$post->content}}</textarea>
                    </div>
                    @error('content')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror
                    <div class="form-group w-50">
                        <label for="exampleInputFile">File input</label>
                        <div class="w-50 mb-2">
                            <img src="{{asset('storage/'. $post->preview_image)}}" alt="preview_image" class="w-50">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                                <label class="custom-file-label" for="exampleInputFile">Choose picture</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    @error('preview_image')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror
                    <div class="form-group w-50">
                        <label for="exampleInputFile">File general input</label>
                        <div class="w-50 mb-2">
                            <img src="{{asset('storage/'.$post->main_image)}}" alt="main_image" class="w-50">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                                <label class="custom-file-label" for="exampleInputFile">Choose picture</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    @error('main_image')
                    <div class="text-danger col-12">{{$message}}</div>
                    @enderror
                    <div class="form-group w-50">
                        <label>Choose category</label>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    {{$category->id == $post->category_id ? 'selected' : '' }}
                                >{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Choose tags" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }} value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="{{route('admin.post.index')}}" class="btn btn-success">Back</a>
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
