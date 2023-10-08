@extends('manager_dashboard.manager_master')
@section('title' , 'إضافة مكتبة')
@section('content')

    <!-- BEGIN: Content-->

        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">إضافة مكتبة</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/home') }}">الصفحة الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/libraries') }}">المكتبات</a>
                                </li>
                                <li class="breadcrumb-item active">إضافة مكتبة
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Elements start -->
                <section class="basic-elements">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">إضافة مكتبة</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                    <form action="{{ route('manager_dashboard.libraries.store') }}" method="post">
                                                        @csrf
                                                <fieldset class="form-group">
                                                    <label for="basicInput">المكتبة</label>
                                                    <input name="library_name" type="text" class="form-control" id="basicInput"> <br>

                                                    <label for="basicInput">رابط المكتبة</label>
                                                    <input name="href_name" type="url" class="form-control" id="basicInput"> <br>

                                                        <button type="submit" class="btn btn-outline-primary btn-lg">حفظ</button>

                                                </fieldset>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->
            </div>
        </div>


@endsection
