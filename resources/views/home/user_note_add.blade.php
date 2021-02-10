@extends('layouts.home')

@section('title','Note Add')

@section('headerjs')

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Add Note</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Add Note</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-3">
                                @include('home.usermenu')
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div class="box box-primary">
                                        <!-- form start -->
                                        <form role="form" action="{{route('user_note_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <label>Faculty-Department</label>
                                                    <select class="form-control" name="category_id">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs -> id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lesson</label>
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
                                                <div class="form-group">
                                                    <label>File</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Slug</label>
                                                    <input type="text" name="slug" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Detail</label>
                                                    <textarea id="detail" name="detail"></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'detail' );
                                                    </script>
                                                </div>
                                                {{--<div class="form-group">
                                                    <label>User</label>
                                                    <input type="number" name="user" class="form-control">
                                                </div>--}}
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option selected="selected">New</option>
                                                    </select>
                                                </div>
                                            </div><!-- /.box-body -->

                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">Add Note</button>
                                            </div>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
