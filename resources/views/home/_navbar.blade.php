@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<section id="mu-menu">
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarDefault" aria-expanded="false" aria-label="Toggle navigation" aria-controls="navbarDefault">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-university"></i><span>Note Share</span></a>
                <!-- IMG BASED LOGO  -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($parentCategories as $rs)
                                <li class="dropdown side-dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-right"></i> </a>
                                    <div class="custom-menu">
                                        <div class="row">

                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif

                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('references')}}">References</a></li>

                    <li class="dropdown">
                        @auth
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span>
                            <strong class="text-uppercase">{{Auth::user()->name}}</strong>
                        @endauth
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user-o"></i>My Account</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user-o"></i>Logout </a></li>
                        </ul>
                    </li>
                    @guest
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Join</a></li>
                        </ul>
                    </li>
                    @endguest
                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="mu-search-form">
                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End search box -->
