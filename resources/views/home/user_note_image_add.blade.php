<html>
<head>
    <title>Image Gallery</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assets')}}/admin/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
        <div class="container">
            <div class="card-body">
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" action="{{route('user_image_store', ['note_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Add image</button>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                        <tr>
                            <th rowspan="1" colspan="1">Id</th>
                            <th rowspan="1" colspan="1">Title</th>
                            <th rowspan="1" colspan="1">Image</th>
                            {{--<th rowspan="1" colspan="1">File</th>--}}
                            <th rowspan="1" colspan="1">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <p></p>

                            <tr class="gradeU odd">
                                <td class="">{{$rs -> id}}</td>
                                <td class="sorting_1">{{$rs -> title}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="70">
                                    @endif
                                </td>
                                <td class="center "><a href="{{route('user_image_delete',['id' => $rs->id,'note_id'=>$data->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="25"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>

