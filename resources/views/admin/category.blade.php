@extends('layouts.admin')

@section('title', 'Admin Panel HomePage')

@section('content')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>CATEGORIES</h2>

                </div>
            </div>
            <div class="col-md-12">
                <div class="card-header">
                    <a class="btn btn-block btn-info" type="button" style="width:200px" href="{{route('admin_category_add')}}">Add</a>
                </div>


            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="dataTables-example_length">
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Parent</th>
                                <th rowspan="1" colspan="1">Title</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th></tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <p></p>

                            <tr class="gradeU odd">
                                <td class="">{{$rs -> id}}</td>
                                <td>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </td>
                                <td class="sorting_1">{{$rs -> title}}</td>
                                <td class=" ">{{$rs -> status}}</td>
                                <td class="center "><a href="{{route('admin_category_edit',['id' => $rs->id])}}">Edit</a></td>
                                <td class="center "><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="card-body">

            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->


@endsection
@section('footer')
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

<script src="{{asset('assets')}}/table/assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/table/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
@endsection

