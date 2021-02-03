@extends('layouts.home')

@section('title', 'Frequently Asked Questions' )

@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Frequently Asked Questions</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Frequently Asked Questions</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                    <h2>{{$rs->question}}</h2>
                    {!! $rs->answer !!}
                    <hr>
                    @endforeach

            </div>
        </div>
    </section>

@endsection
