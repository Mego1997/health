@extends('manager_dashboard.manager_master')
@section('title' , 'تعديل الطبيب')
@section('content')

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">تعديل الطبيب</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/home') }}">الصفحة الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/doctors') }}">الأطباء</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">تعديل الطبيب</a>
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
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Dr. {{ $doctor->doc_name }} Profile</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">

                                <form class="form" action="{{ route('doctors.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-eye"></i> عن الطبيب </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userinput1">إسم الطبيب</label>
                                                    <input type="text" id="userinput1" class="form-control border-primary" placeholder="Name" name="doc_name" value="{{$doctor->doc_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userinput2">تخصص الطبيب</label>
                                                    <input type="text" id="userinput2" class="form-control border-primary" placeholder="Company" name="doc_spec" value="{{$doctor->doc_spec}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="userinput3">بروفايل/ عن الطبيب</label>
                                                <textarea id="profile-editor" rows="5" class="form-control border-primary" name="doc_summary" placeholder="Bio">{{$doctor->doc_summary}}</textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="userinput4">التعليم</label>
                                                <textarea id="edu-editor" rows="5" class="form-control border-primary" name="doc_edu" placeholder="Bio">{{$doctor->doc_edu}}</textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="userinput5">الخبرة</label>
                                                <textarea id="exp-editor" rows="5" class="form-control border-primary" name="doc_exp" placeholder="Bio">{{$doctor->doc_exp}}</textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="userinput6">المهارات</label>
                                                <textarea id="skills-editor" rows="5" class="form-control border-primary" name="doc_skills" placeholder="Bio">{{$doctor->doc_skills}}</textarea>
                                            </div>
                                        </div>

                                        <h4 class="form-section"><i class="feather icon-mail"></i> معلومات الاتصال</h4>

                                        <div class="form-group">
                                            <label for="userinput5">إيميل الطبيب</label>
                                            <input class="form-control border-primary" type="email" placeholder="إيميل" id="userinput5" name="doc_mail" value="{{$doctor->doc_mail}}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="userinput6">عنوان الطبيب</label>
                                            <input class="form-control border-primary" type="text" placeholder="العنوان " id="userinput6"  name="doc_address" value="{{$doctor->doc_address}}" >
                                        </div>

                                        <div class="form-group">
                                            <label>هاتف الطبيب</label>
                                            <input class="form-control border-primary" id="userinput7" type="الهاتف" placeholder="الهاتف" name="doc_phone" value="{{$doctor->doc_phone}}" >
                                        </div>

                                        <div class="form-group">
                                            <label>صورة الطبيب</label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" value="{{ $doctor->doc_image }}" name="doc_image">
                                                <img src="{{ url('public/doctors/' . $doctor->doc_image) }}" height="50" width="50">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>


                                    </div>

                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> حفظ
                                        </button>
                                        <button type="reset" class="btn btn-warning mr-1">
                                            <i class="feather icon-x"></i> إلغاء
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



@endsection
