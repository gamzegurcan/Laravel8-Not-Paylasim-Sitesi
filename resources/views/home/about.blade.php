@extends('layouts.home')
{{--@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp--}}

@section('title', 'About Us -', $setting->title )

@section('description')
{{$setting->description}}
@endsection

@section('keywords' , $setting->keywords)

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>About</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="mu-title">
                                        <h3>About Us</h3>
                                    </div>
                                    {!!$setting->aboutus!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
