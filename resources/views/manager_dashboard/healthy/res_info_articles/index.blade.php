@extends('manager_dashboard.manager_master')
@section('title' , 'الوصفات')
@section('content')

    <!-- BEGIN: Content-->

        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">الوصفات</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/home') }}">الصفحة الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/res_articles') }}">الوصفات</a>
                                </li>
                                <li class="breadcrumb-item active">جميع الوصفات</li>
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
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">المقالات</h4>
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
                                    <div class="card-body card-dashboard">
                                        @if (session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>عنوان الوصفة</th>
                                                <th>صورة الوصفة</th>
                                                <th> نوع الفئة</th>
                                                <th>اسم التاج</th>
                                                <th> الكاتب</th>
                                                <th> العمليات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($res_articles as $key => $article)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $article->article_name }}</td>
                                                <td><img src="{{ url('public/res_articles/' . $article->article_image) }}" width="50" height="50" alt=""></td>
                                                <td>{{ $article->Res_Info_Category->cat_name}}</td>
                                                <td>{{ $article->Res_Info_Tag->tag_name}}</td>
                                                <td>{{ $article->doctor->doc_name}}</td>
                                                <td>
                                                    <a href="{{ route('manager_dashboard.healthy.res_info_articles.edit', $article->id) }}"  class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{ $article->id }}"> <i class="fa-solid fa-trash"></i> </button>
                                                </td>
                                                </form>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="danger{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                                <form action="{{ route('manager_dashboard.healthy.res_info_articles.destroy', $article->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger white">
                                                                <h4 class="modal-title" id="myModalLabel10">تأكيد الحذف</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>
                                                                هل أنت متأكد من حذف الوصفة
                                                               " {{ $article->article_name }} "
                                                                    ؟
                                                                </h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-outline-danger">إحذف</button>
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">إغلاق</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            @endforeach
                                            </tbody>

                                        </table>
                                            <a class="btn btn-outline-primary btn-lg" href="{{ asset('/manager/dashboard/res_articles/create') }}">
                                                اضافة وصفة
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>

    <!-- END: Content-->

@endsection
