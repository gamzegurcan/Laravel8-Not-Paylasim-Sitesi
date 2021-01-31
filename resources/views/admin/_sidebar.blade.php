<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center user-image-back">
                <img src="{{asset('assets')}}/admin/assets/img/user.png"/>

            </li>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{Auth:: user()->name}}</a>

                @endauth
            </div>


            <li>
                <a href="{{route('admin_category')}}"><i class="fa fa-bars "></i>CATEGORIES</a>
            </li>

            <li>
                <a href="{{route('admin_note')}}"><i class="fa fa-table"></i>NOTES</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-comment "></i>MESSAGES </a>
            </li>
            <li>
                <a href="{{route('admin_review')}}"><i class="fa fa-user "></i>REVIEWS</a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-question "></i>FAQ</a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}"><i class="fa fa-edit "></i>SETTINGS</a>
            </li>

        </ul>

    </div>

</nav>
