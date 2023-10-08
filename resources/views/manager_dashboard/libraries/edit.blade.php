@extends('manager_dashboard.manager_master')
@section('title' , 'تعديل المكتبة')
@section('content')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">تعديل المكتبة</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/home') }}">الصفحة الرئبيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/libraries') }}">المكتبات</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل المكتبة</li>
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
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center"><h3>تعديل المكتبة</h3></div>
                            <div class="card-body text-center">

                                <form action="{{ route('manager_dashboard.libraries.update', $libraries->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="text" class="form-control" value="{{ $libraries->library_name }}" name="library_name"> <br>
                                    <input type="text" class="form-control" value="{{ $libraries->href_name }}" name="href_name"> <br>

                                    <button type="submit" class="btn btn-outline-primary btn-lg">حفظ التعديلات</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



@endsection
