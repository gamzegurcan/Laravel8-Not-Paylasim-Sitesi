@extends('layouts.home')
@section('title','User Profile')
@section('content')

    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">User Review</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
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
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                                <thead>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Id</th>
                                                    <th rowspan="1" colspan="1">Content</th>
                                                    <th rowspan="1" colspan="1">Subject</th>
                                                    <th rowspan="1" colspan="1">Review</th>
                                                    <th rowspan="1" colspan="1">Status</th>
                                                    <th rowspan="1" colspan="1">Date</th>
                                                    <th rowspan="1" colspan="1">Delete</th></tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <p></p>

                                                    <tr class="gradeU odd">
                                                        <td class="">{{$rs -> id}}</td>
                                                        <td>
                                                            <a href="{{route('note',['id'=> $rs->note->id])}}" target="_blank">{{$rs->note->title}}</a>
                                                        </td>
                                                        <td class="sorting_1">{{$rs -> subject}}</td>
                                                        <td class="sorting_1">{{$rs -> review}}</td>

                                                        <td class=" ">{{$rs -> status}}</td>
                                                        <td class="sorting_1">{{$rs -> created_at}}</td>
                                                        <td class="center ">
                                                            <a href="{{route('user_review_delete', ['id' => $rs->id])}}" onclick="return confirm('are you want to delete?')">
                                                                <img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="30"></a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
