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

{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">--}}
{{--                        <i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees </span></a>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Leave </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href=#"> Holiday </a></li>--}}
{{--                        <li><a href="#"> Leave Application </a></li>--}}
{{--                        <li><a href="#"> Leave Sheet </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Projects </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#">Projects </a></li>--}}
{{--                        <li><a href="#"> Task List </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu">Organization </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('department.index')}}">Department </a></li>
                        <li><a href="#">Designation</a></li>
                    </ul>
                </li>
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#">Employees </a></li>--}}
{{--                        <li><a href="#">Disciplinary </a></li>--}}
{{--                        <li><a href="#">Inactive User </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Attendance </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#">Attendance List </a></li>--}}
{{--                        <li><a href="#">Add Attendance </a></li>--}}
{{--                        <li><a href="#">Attendance Report </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Leave </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#"> Holiday </a></li>--}}
{{--                        <li><a href="#"> Leave Type</a></li>--}}
{{--                        <li><a href="#"> Leave Application </a></li>--}}
{{--                        <li><a href="#"> Earned Leave </a></li>--}}
{{--                        <li><a href="#"> Report </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Project </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#">Projects </a></li>--}}
{{--                        <li><a href="#"> Task List </a></li>--}}
{{--                        <li><a href="#"> Field Visit</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Loan </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#"> Grand Loan </a></li>--}}
{{--                        <li><a href="#"> Loan Installment</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Assets </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#"> Assets Category </a></li>--}}
{{--                        <li><a href="#"> Asset List </a></li>--}}
{{--                        <li><a href="#"> Logistic Support </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">Payroll </span></a>--}}
{{--                    <ul aria-expanded="false" class="collapse">--}}
{{--                        <li><a href="#"> Payroll List </a></li>--}}
{{--                        <li><a href="#"> Generate Payslip</a></li>--}}
{{--                        <li><a href="#"> Payslip Report</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a href="#" ><i class="mdi mdi-treasure-chest"></i><span class="hide-menu">Notice </span></a></li>--}}
{{--                <li> <a href="#" ><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a></li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
