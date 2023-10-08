<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

@include('manager_dashboard.inc.head')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


@include('manager_dashboard.inc.header')


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li>
                <a href="{{url('/manager/dashboard/home')}}"> <i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">الصفحة الرئيسية</span></a>
            </li>
            <li class=" nav-item"><a href=""><i class="fa-solid fa-ellipsis-vertical"></i><span class="menu-title" data-i18n="Dashboard">المكتبات</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('/manager/dashboard/libraries')}}" data-i18n="eCommerce"> جميع المكتبات</a>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-ecommerce.html" data-i18n="eCommerce">معلومات عن الغذاء الصحي</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ url('/manager/dashboard/info_articles') }}" data-i18n="Analytics">جميع المقالات</a></li>
                            <li><a class="menu-item" href="{{ url('/manager/dashboard/info_categories') }}" data-i18n="Analytics">أنواع المقالات</a></li>
                            <li class="active"><a class="menu-item" href="{{ url('/manager/dashboard/info_articles/create') }}" data-i18n="Analytics">إضافة مقالة</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-ecommerce.html" data-i18n="eCommerce">وصفات غذاء صحى مكتوبة</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ url('/manager/dashboard/info_articles') }}" data-i18n="Analytics">الوصفات</a></li>
                            <li><a class="menu-item" href="{{ url('/manager/dashboard/rec_categories') }}" data-i18n="Analytics">أنواع الوصفات</a></li>
                            <li class="active"><a class="menu-item" href="{{ url('/manager/dashboard/info_articles/create') }}" data-i18n="Analytics">إضافة وصفة</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-ecommerce.html" data-i18n="eCommerce">مكتبة الفيديو </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ url('/manager/dashboard/info_articles') }}" data-i18n="Analytics">الفيديوهات</a></li>
                            <li class="active"><a class="menu-item" href="{{ url('/manager/dashboard/info_articles/create') }}" data-i18n="Analytics">إضافة فيديو</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


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
