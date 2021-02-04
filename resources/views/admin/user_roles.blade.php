<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">

<!-- Font awesome -->
<link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
<!-- Slick slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
<!-- Fancybox slider -->
<link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.css" type="text/css" media="screen" />
<!-- Theme color -->
<link id="switcher" href="{{asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">


<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>User Roles</h2>
                    @include('home.message')
                </div>
                <hr />
            </div>

            <!-- /. ROW  -->
            <hr />
            <div class="card-body">
                <div class="box box-primary">
                    <!-- form start -->
                        @csrf
                        <div class="box-body">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">

                                <tr>
                                <tr>
                                    <th rowspan="1" colspan="1">Id</th>
                                    <td class="sorting_1">{{$data -> id}}</td>
                                </tr>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <td class="sorting_1">{{$data ->name}}</td>
                                </tr>
                                <tr>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <td class="sorting_1">{{$data ->email}}</td>
                                </tr>
                                <tr>
                                    <th rowspan="1" colspan="1">Phone</th>
                                    <td class="sorting_1">{{$data -> phone}}</td>
                                </tr>
                                <tr>
                                    <th rowspan="1" colspan="1">Roles</th>
                                    <td>
                                        <table>
                                            @foreach($data->roles as $row)
                                                <tr>
                                                    <td>{{$row->name}}</td>
                                                    <td><a href="{{route('admin_user_role_delete',['userid' => $data->id ,'roleid'=>$row->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="25"></a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add Role</th>
                                    <td>
                                        <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                            @endforeach
                                        </select>
                                            <button type="submit" class="btn btn-primary">Add Roles</button>
                                        </form>
                                    </td>

                                </tr>

                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE WRAPPER  -->




