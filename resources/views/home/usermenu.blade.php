@auth
<aside class="mu-sidebar">
    <!-- start single sidebar -->
    <div class="mu-single-sidebar">
        <p></p>
        <p></p>
        <h2>USER PANEL</h2>
        <ul class="mu-sidebar-catg">
            <li><a href="{{route('myprofile')}}">My Profile</a></li>
            <li><a href="{{route('myreviews')}}">My Review</a></li>
            <li><a href="{{route('user_note')}}">My Note</a></li>
            @php

                $userRoles = Auth::user()->roles->pluck('name');

            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
            @endif
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </div>
</aside>
@endauth







