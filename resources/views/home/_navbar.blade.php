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
                                    {{--<div class="custom-menu">
                                        <div class="row">--}}

                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif

                                        {{--</div>
                                    </div>--}}
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
                            <li><a href="{{route('myreviews')}}"><i class="fa fa-user-o"></i>My Reviews </a></li>
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
                    <li> <form class="mu-search-form" action="{{route('getnote')}}" method="post">
                            @csrf
                            @livewire('search')
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i> </button>
                    </form>
                    </li>
                    @section('footerjs')
                        @livewireScripts
                    @endsection
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->

