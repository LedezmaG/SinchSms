<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="user-profile treeview">
                <a href="{{ URL::route('profile') }}">
                    <img src="{{ asset('images/user5-128x128.jpg') }}" alt="user">
                    <span>Juliya Brus</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::route('profile') }}"><i class="fa fa-user mr-5"></i> Profile </a></li>
                    <li><a href="{{ URL::route('sms') }}"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                    <li><a href=""><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                    <li><a href=""><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a></li>
                </ul>
            </li>
            <li class="header nav-small-cap">PERSONAL</li>
            <li class="">
                <a href="{{ URL::route('home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
            <li class=" treeview">
                <a href="{{ URL::route('sms') }}">
                    <i class="fa fa-envelope"></i>
                    <span>SMS</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                    <li><a href="{{ URL::route('sms') }}"><i class="fa fa-money mr-5"></i>Batches</a></li>
                    <li><a href="{{ URL::route('dashboard') }}"><i class="fa fa-envelope"></i>Single SMS</a></li>
                    <li><a href="{{ URL::route('tempate') }}"><i class="fa fa-window-maximize"></i>Template</a></li>
                    <li><a href="{{ URL::route('settings') }}"><i class="fa fa-cog mr-5"></i>Settings</a></li>
                </ul>
            </li>
            <li class="">
                <a href="{{ URL::route('contacts') }}">
                    <i class="fa fa-address-book"></i> <span>My contacts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>

<!-- .wrapper -->
<div class="content-wrapper">
    