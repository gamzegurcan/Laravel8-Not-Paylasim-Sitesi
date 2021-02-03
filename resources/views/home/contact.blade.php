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
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!-- Start contact  -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        @include('home.message')
                                        <form class="contactform" action="{{route('sendmessage')}}" method="post">
                                            @csrf
                                            <p class="comment-form-name">
                                                <label for="name">Name <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="name">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value="" name="email">
                                            </p>
                                            <p class="comment-form-phone">
                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Message</label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        {!!$setting->contact!!}
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
