@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<header id="mu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>{{$setting->email}}</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>{{$setting->phone}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-right">
                                <nav>
                                    <ul class="mu-top-social-nav">
                                        @if($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a></li>@endif
                                        @if($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank"><span class="fa fa-twitter"></span></a></li>@endif
                                        @if($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><span class="fa fa-instagram"></span></a></li>@endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->

