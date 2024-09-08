<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myAppliedCases')}}">
                        <i class="fa fa-legal"></i>
                        <span>My Applied Cases</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('caseManagement')}}">
                        <i class="fa fa-legal"></i>
                        <span>Case Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('documentManagement')}}">
                        <i class="fa fa-file"></i>
                        <span>Document Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('chatBox')}}">
                        <i class="fa fa-file"></i>
                        <span>Chat BOX</span>
                    </a>
                        <!-- <ul class="sub">
                            <li><a href="basic_table.html">All Cases</a></li>
                            <li><a href="responsive_table.html">Pending Case</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a  href="{{route('billing')}}">
                        <i class="fa fa-cc-visa"></i>
                        <span>Billing And Invoicing</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="{{route('profile')}}">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        <span>Sign-Out</span>
                    </a>
                </li>
        </div>
    </div>
</aside>