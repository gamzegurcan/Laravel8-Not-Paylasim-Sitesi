@php
    $setting  = \App\Http\Controllers\HomeController::getsetting()
@endphp
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">Course</a></li>
                                <li><a href="">Event</a></li>
                                <li><a href="">Sitemap</a></li>
                                <li><a href="">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Student Help</h4>
                            <ul>
                                <li><a href="">Get Started</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="">Download Files</a></li>
                                <li><a href="">Latest Course</a></li>
                                <li><a href="">Academic News</a></li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>News letter</h4>
                            <p>Get latest update, news & academic offers</p>
                            <form class="mu-subscribe-form">
                                <input type="email" placeholder="Type your Email">
                                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                            </form>
                        </div>
                    </div>--}}
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Contact</h4>
                            <address>
                                <p>Address: {{$setting->adress}}</p>
                                <p>Phone: {{$setting->phone}}</p>
                                <p>Fax: {{$setting->fax}}</p>
                                <p>Email: {{$setting->email}}</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; All Right Reserved. Designed by Gamze Gürcan</p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- jQuery library -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets')}}/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('assets')}}/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('assets')}}/js/waypoints.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.fancybox.pack.js"></script>




<!-- Custom js -->
<script src="{{asset('assets')}}/js/custom.js"></script>


<!-- Custom js -->
<script src="{{asset('assets')}}/js/custom.js"></script>
