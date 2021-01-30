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

<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-our-teacher-area">
                    <!-- begain title -->
                    <div class="mu-title">
                        <h2>Our Teachers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>
                    </div>
                    <!-- end title -->
                    <!-- begain our teacher content -->
                    <div class="mu-our-teacher-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>Brian Dean</h4>
                                        <span>Math Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{asset('assets')}}/img/teachers/teacher-02.png" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>James Hein</h4>
                                        <span>Physics Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{asset('assets')}}/img/teachers/teacher-03.png" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>Rebeca Michel</h4>
                                        <span>English Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{asset('assets')}}/img/teachers/teacher-04.png" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>John Doe</h4>
                                        <span>Biology Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End our teacher content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End our teacher -->

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
    <!-- End latest course section -->

    <!-- Start testimonial -->
    <section id="mu-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonial-area">
                        <div id="mu-testimonial-slide" class="mu-testimonial-content">
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('assets')}}/img/testimonial-1.png" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>John Doe</h4>
                                    <span>Happy Student</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial -->

@endsection


