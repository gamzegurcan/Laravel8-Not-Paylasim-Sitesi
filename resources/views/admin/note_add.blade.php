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
                    <h2>NOTE ADD</h2>
                </div>
                <hr />
            </div>

            <!-- /. ROW  -->
            <hr />
            <div class="card-body">
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" action="{{route('admin_note_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs -> id}}">{{$rs -> title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            {{--<div class="form-group">
                                <label>File</label>
                                <input type="file" name="file" class="form-control">
                            </div>--}}
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            {{--<div class="form-group">
                                <label>Category</label>
                                <input type="number" name="category" class="form-control">
                            </div>--}}
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <input type="number" name="user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Add Note</button>
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

