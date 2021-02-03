@extends('layouts.home')

@section('title', $setting->title )

@section('description')
    {{$setting->description}}
@endsection

@section('keywords' , $setting->keywords)

@section('content')
@include('home._slider')

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start our teacher -->
<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-our-teacher-area">
                    <!-- begain title -->
                    <div class="mu-title">
                        <h2>Our Notes </h2>
                        <p>Farklı fakültelerin bölümlerinin notlarını bulabilir kendiniz not ekleyebilirsiniz. </p>                   </div>
                    <!-- end title -->
                    <!-- begain our teacher content -->
                    <div class="mu-our-teacher-content">
                        <div class="row">
                            @foreach($note as $rs)
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="assets/img/notes.jpg" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="{{$setting->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a>
                                            <a href="{{$setting->twitter}}" target="_blank"><span class="fa fa-twitter"></span></a>
                                            <a href="{{$setting->instagram}}" target="_blank"><span class="fa fa-instagram"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>{{$rs->title}}</h4>
                                        <span>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</span>
                                        <p>{!!$rs->detail!!}</p>
                                        <h5><a href="{{route('note',['id'=>$rs->id])}}">Detail</a></h5>
                                    </div>
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
    <section id="mu-latest-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-latest-courses-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Latest Notes</h2>
                            <p>Farklı fakültelerin bölümlerinin notlarını bulabilir kendiniz not ekleyebilirsiniz.</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start latest course content -->
                        <div id="mu-latest-course-slide" class="mu-latest-courses-content">

                            @foreach($latest as $rs)
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{Storage::url($rs->image)}}" alt="img" height="300"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">{{$rs->title}}</a>
                                            <span></span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <p>{!!$rs->detail!!}</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <h4><a href="{{route('note',['id'=>$rs->id])}}">Show Note Detail</a></h4>                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- End latest course content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="mu-from-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-from-blog-area">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


