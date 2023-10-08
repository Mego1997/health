@extends('manager_dashboard.manager_master')
@section('title' , 'تعديل مقالة')
@section('content')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">تعديل مقالة</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/home') }}">الصفحة الرئبيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/manager/dashboard/info_articles') }}">المقالات</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل مقالة </li>
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
                                <h4 class="card-title" id="basic-layout-colored-form-control">تعديل مقالة</h4>
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

                                    <form class="form" action="{{ route('manager_dashboard.healthy.he_info_articles.update', $info_articles->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fa fa-eye"></i> عن المقالة </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="userinput1">عنوان المقالة</label>
                                                        <input type="text" id="userinput1" class="form-control border-primary" value="{{$info_articles->article_name}}" name="article_name">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="userinput4">نوع الفئة</label>
                                                    {{-- <input type="text" id="userinput1" class="form-control border-primary" placeholder="نوع الفئة" name="cat_id"> --}}
                                                    <select name="cat_id" id="" class="custom-select border-primary">
                                                        <option value="{{$info_articles->cat_id}}">{{$info_articles->He_Info_Category->cat_name}}</option>
                                                        @foreach ($info_categories as $category)
                                                          <option value="{{ $category->id }}" >{{ $category->cat_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="userinput5">أسم التاج</label>
                                                    {{-- <input type="text" id="userinput1" class="form-control border-primary" placeholder="إسم التاج" name="tag_id"> --}}
                                                    <select name="tag_id" id="" class="custom-select border-primary">
                                                        <option value="{{$info_articles->tag_id}}">{{$info_articles->He_Info_tag->tag_name}}</option>
                                                        @foreach ($info_tags as $tag)
                                                          <option value="{{ $tag->id }}" >{{ $tag->tag_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="userinput6">الكاتب</label>
                                                    {{-- <textarea id="skills-editor" rows="5" class="form-control border-primary" name="doc_id" placeholder="الكاتب "> </textarea> --}}
                                                    <select name="doc_id" id="" class="custom-select border-primary">
                                                        <option value="{{$info_articles->doc_id}}">{{$info_articles->doctor->doc_name}}</option>
                                                        @foreach ($doctors as $doctor)
                                                          <option value="{{ $doctor->id }}" >{{ $doctor->doc_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="feather icon-mail"></i> محتوي المقالة</h4>

                                            <div class="form-group">
                                                <label>المقالة </label>
                                                <textarea id="info-article-editor" rows="5" class="form-control border-primary" name="article_body" placeholder="المقالة">{{$info_articles->article_body}} </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>صورة المقالة</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" value="{{$info_articles->article_image}}" name="article_image">
                                                    <img src="{{ url('public/info_articles/' . $info_articles->article_image) }}" width="50" height="50" alt="">
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
