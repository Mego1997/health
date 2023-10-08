@extends('platform.platform_master')
@section('body')

<!-- Inner Banner -->
<div class="inner-banner inner-bg8">
    <div class="container">
        <div class="inner-title text-center">
            <h3>معلومات عن الغذاء الصحى</h3>
            <ul>
                <li>
                    <a href="{{ url('/homepage') }}">الصفحة الرئيسية</a>
                </li>
                <li>معلومات</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->
<!-- Blog Widget Area -->
<div class="blog-widget-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="categories-title">
                <h3>معلومات عن الغذاء الصحي <span></span></h3>
            </div>
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    @foreach ( $info_categories as $category )

                    <div class="col-lg-3 col-md-3">
                        <div class="blog-item" >
                            <a  href="{{ route('platform.infocategory.show', $category->id) }}">
                                <img src="{{ url('public/info_categories/' . $category->cat_image) }}" style="height:250px ; object-fit: cover" class="img-fluid" alt="Blog Images">
                            </a>
                           <div class="content">
                                <span><i class="flaticon-calendar-1"></i>{{$category->created_at}}</span>
                                <h3><a href="{{ route('platform.infocategory.show', $category->id) }}"> {{$category->cat_name}}</a></h3>
                                <a href="{{ route('platform.infocategory.show', $category->id) }}" class="read-btn">قراءة المزيد</a>
                           </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
                            <a href="categories.html" class="prev page-numbers">
                                <i class="bx bx-chevron-left"></i>
                            </a>

                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="categories.html" class="page-numbers">2</a>
                            <a href="categories.html" class="page-numbers">3</a>

                            <a href="categories.html" class="next page-numbers">
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Widget Area End -->

@endsection
