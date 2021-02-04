@extends('layouts.admin')

@section('title', 'Admin Panel HomePage')
@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="box-body">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                    <tr>
                        <th rowspan="1" colspan="1">Photo</th>
                        <td>
                            @if($data->profile_photo_path)
                                <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                            @endif

                        </td>
                    </tr>

                    <tr>
                        <th rowspan="1" colspan="1">Id</th>
                        <td class="">{{$data ->id}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Name</th>
                        <td class="sorting_1">{{$data -> name}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Email</th>
                        <td class="sorting_1">{{$data -> email}}</td>
                    </tr><tr>
                        <th rowspan="1" colspan="1">Phone</th>
                        <td class="sorting_1">{{$data -> phone}}</td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Date</th>
                        <td class="sorting_1">{{$data -> created_at}}</td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Roles</th>
                        <td class="sorting_1">@foreach($data -> roles as $row)
                                {{$row->name}}
                            @endforeach
                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                <img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="30"></a>

                        </td>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">Add Role</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-success">Add Role</button>
                            </form>
                        </td>
                    </tr>
                    <td></td><td>

                    </td>

                </table>
            </div>



        </div>
    </div>



@endsection
