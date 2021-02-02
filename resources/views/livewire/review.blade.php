<div>
    <h2>Write Your Review</h2>
    <p></p>
    <p></p>
    <p></p>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="form-a" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="inputName">Subject</label>
                    <input type="text" wire:model="subject" class="form-control form-control-lg form-control-a" id="inputName"
                           required>
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="textMessage">Comment</label>
                    <textarea  wire:model="review" class="form-control" placeholder="Your comment..."  cols="45"
                               rows="8" required></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            {{--<div class="form-group">
                <div class="input-rating">
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                    <strong class="text-uppercase">Your Rating:</strong>

                    <div class="fa fa-star">
                        <input type="radio" id="fa fa-star1" wire:model="rate" value="5" /><label for="fa fa-star1"></label>
                        <input type="radio" id="fa fa-star2" wire:model="rate" value="4" /><label for="fa fa-star2"></label>
                        <input type="radio" id="fa fa-star3" wire:model="rate" value="3" /><label for="fa fa-star3"></label>
                        <input type="radio" id="fa fa-star4" wire:model="rate" value="2" /><label for="fa fa-star4"></label>
                        <input type="radio" id="fa fa-star5" wire:model="rate" value="1" /><label for="fa fa-star5"></label>
                    </div>
                </div>
            </div>--}}
        </div>
        @auth
            <input type="submit" class="mu-post-btn" value="Save"/>
        @else
            <a href="/login" class="btn btn-a">For submit Review Login</a>
        @endauth
    </form>
</div>
</div>
</div>
