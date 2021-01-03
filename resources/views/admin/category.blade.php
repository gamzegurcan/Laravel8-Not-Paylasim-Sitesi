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
                                    {{--<label>
                                        <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> records per page</label>
                                </div>
                            </div>
                            <div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter">
                                    <label>Search:
                                        <input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                                    </label>--}}
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
                                <td class="sorting_1">{{$rs -> parent_id}}</td>
                                <td class="sorting_1">{{$rs -> title}}</td>
                                <td class=" ">{{$rs -> status}}</td>
                                <td class="center "><a href="{{route('admin_category_edit',['id' => $rs->id])}}">Edit</a></td>
                                <td class="center "><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                        {{--<div class="row">
                            <div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                            <a href="#">Previous</a>
                                        </li>
                                        <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">1</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">2</a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">3</a>
                                        </li>
                                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                            <a href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>--}}
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

