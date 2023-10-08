<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

@include('manager_dashboard.inc.head')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


@include('manager_dashboard.inc.header')


@include('manager_dashboard.inc.main_menu')


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@include('manager_dashboard.inc.footer')


@include('manager_dashboard.inc.script')

</body>
<!-- END: Body-->

</html>
