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
            <p>{!!$rs->detail!!}</p>
            <a href="{{route('note',['id'=>$rs->id])}}" class="mu-read-more-btn">Read More</a>
        </div>
    </div>
    @endforeach

</section>
<!-- End Slider -->
