@extends('layouts.admin')

@section('title', 'Notes')
@section('javascript')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection
@section('content')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>NOTE EDIT</h2>
                </div>
                <hr />
            </div>

            <!-- /. ROW  -->
            <hr />
            <div class="card-body">
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" action="{{route('admin_note_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs -> id}}" @if ($rs->id==$data->parent_id) selected="selected" @endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description"  value="{{$data->description}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">

                                @if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" height="30">
                                @endif

                            </div>
                            {{--<div class="form-group">
                                <label>File</label>
                                <input type="text" name="file" class="form-control">
                            </div>--}}
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug"  value="{{$data->slug}}" class="form-control">
                            </div>
                            {{--<div class="form-group">
                                <label>Category</label>
                                <input type="number" name="category"  value="{{$data->category}}" class="form-control">
                            </div>--}}
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="detail" name="detail" value="{{$data->detail}}"></textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <input type="number" name="user" value="{{$data->user}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Note</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->


@endsection

