<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{route('getAdminIndex')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="viewuser">
                        <i class="fa fa-users"></i>
                        <span>View Users</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-tags"></i>
                        <span>Lawyer Management</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('getCaseManagement')}}">
                        <i class="fa fa-legal"></i>
                        <span>Case Management</span>
                    </a>
                        <!-- <ul class="sub">
                            <li><a href="basic_table.html">All Cases</a></li>
                            <li><a href="responsive_table.html">Pending Case</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="{{route('getLawyerDocumentData')}}">
                        <i class="fa fa-file"></i>
                        <span>Document Management</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('getLegalStatus')}}">
                        <i class="fa fa-low-vision"></i>
                        <span>Legal Status</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cc-visa"></i>
                        <span>Payments Management</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a class="fa fa-inr" href="basic_table.html">Payment</a></li>
                        <li><a href="responsive_table.html">Donations</a></li>
                    </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="{{route('getHireLawyer')}}">
                        <i class="fa fa-tasks"></i>
                        <span>Hired Cases</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('getDonateReporting')}}">
                        <i class="fa fa-pencil-square-o"></i>
                        <span href="allusers">Donate-Reporting</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cog"></i>
                        <span href="#">System Setting</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-cog"></i>
                        <span href="">Registration</span>
                    </a>
                </li>
            </ul>           
         </div>
    </div>
</aside>