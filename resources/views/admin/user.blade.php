@extends('layouts.admin')

@section('title', 'User List')

@section('content')

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>USERS</h2>

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
                                <th rowspan="1" colspan="1">Photo</th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Phone</th>
                                <th rowspan="1" colspan="1">Roles</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th></tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <p></p>

                            <tr class="gradeU odd">
                                <td class="sorting_1">{{$rs -> id}}</td>
                                <td>
                                    @if($rs->profile_photo_path)
                                        <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                    @endif
                                </td>
                                <td class="sorting_1">{{$rs ->name}}</td>
                                <td class="sorting_1">{{$rs -> email}}</td>
                                <td class=" ">{{$rs -> phone}}</td>
                                <td>
                                    @foreach($rs->roles as $row)
                                        {{ $row-> name }},
                                    @endforeach
                                        <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')"><img src="{{asset('assets')}}/admin/assets/images/plus.png" height="20"></a>
                                </td>
                                <td class="center "><a href="{{route('admin_user_edit',['id' => $rs->id])}}"><img src="{{asset('assets')}}/admin/assets/images/editicon.png" height="25"></a></td>
                                <td class="center "><a href="{{route('admin_user_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="25"></a></td>
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

