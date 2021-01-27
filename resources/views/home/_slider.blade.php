<!-- Start Slider -->
<section id="mu-slider">
    <!-- Start single slider item -->
    @foreach($slider as $rs)
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{Storage::url($rs->image)}}" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>{{$rs->title}}</h4>
            <span></span>
            <h2>We Will Help You To Learn</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
            <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
    </div>
    @endforeach

</section>
<!-- End Slider -->
