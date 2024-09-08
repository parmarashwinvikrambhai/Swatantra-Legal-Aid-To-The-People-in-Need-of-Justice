<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="{{route('getClients')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               <li class="sub-menu">
                    <a href="{{ route('getArtical') }}">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Post Article</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('my-post')}}">
                        <i class="fa fa-image"></i>
                        <span>My Post</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('status') }}">
                        <i class="fa fa-bell"></i>
                        <span>Case Status</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getPaymentBilling') }}">
                        <i class="fa fa-cc-visa"></i>
                        <span>Payment & Billing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getMessaging') }}">
                        <i class="fa fa-comment"></i>
                        <span>Messaging With Lawyer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getDocument') }}">
                        <i class="fa fa-folder-open"></i>
                        <span>Document Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>           
         </div>
    </div>
</aside>