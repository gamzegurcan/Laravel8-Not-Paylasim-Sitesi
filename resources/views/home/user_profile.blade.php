@extends('layouts.home')

@section('title', 'User Profile' )

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>My Account</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">My Account</li>
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
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
