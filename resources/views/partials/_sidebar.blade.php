<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{auth()->user()->getPhotoUrl()}}" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>

            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{auth()->user()->name}}</h5>
                <a href="#" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a href="{{route('home')}}" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
