@extends('layouts.home')

@section('title', $data->title. ' Note List')

@section('description')  {{$data->description}} @endsection

@section('keywords', $data->keywords)

@section('content')

    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>{{$data->title}}</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data -> title) }} Notları</li>
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
                            <div class="mu-course-container">
                                <div class="row">
                                    @foreach($datalist as $rs)
                                        <div class="col-md-4 col-sm-4">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="{{Storage::url($rs->image)}}" alt="img" height="300"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <a href="#">{{$rs->title}}</a>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">

                                                    {{--<p>{!!$rs->detail!!}</p>--}}
                                                   {{-- <h6><a href="{{Storage::url($rs->file)}}" target="_blank"><img src="{{asset('assets')}}/admin/assets/images/pdf.png" height="25">Tıklayınız</a></h6>--}}
                                                    <h4><a href="{{route('note',['id'=>$rs->id])}}">Detail</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mu-pagination">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                    <span class="fa fa-angle-left"></span> Prev
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                Next <span class="fa fa-angle-right"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



