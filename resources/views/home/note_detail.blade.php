@extends('layouts.home')


@section('title', )

@section('description')

@endsection

@section('keywords' )

@section('content')

    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Note Detail</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Note Detail</li>
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
                            <div class="col-md-12">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-course-details">
                                    <div class="row">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <img src="{{Storage::url($data->image)}}" alt="img" height="500" width="750">
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h2>{{$data->title}}</h2>
                                                    <h4>Description</h4>
                                                    <p>{!! $data->detail !!}</p>
                                                    <h3><a href="{{Storage::url($data->file)}}" target="_blank"><img src="{{asset('assets')}}/admin/assets/images/pdf.png" height="50">Tıklayınız</a></h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="mu-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-contact-area">
                            <div class="mu-contact-content">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6">
                                        <div class="mu-contact-left">
                                            @livewire('review',['id'=> $data->id])
                                        </div>
                                    </div>
                                    @foreach($reviews as $rs)
                                    <div class="col-md-7 col-sm-6" >
                                        <div class="mu-contact-right">
                                                <h4 class="comment-author">{{$rs->user->name}}</h4>
                                                <span>{{$rs->created_at}}
                                                </span>
                                                <p class="comment-description">
                                                    <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->review}}</p>
                                                </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>












@endsection
