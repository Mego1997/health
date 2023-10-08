@extends('platform.platform_master')
@section('body')

<!-- Inner Banner -->
<div class="inner-banner inner-bg8">
    <div class="container">
        <div class="inner-title text-center">
            <h3>مكتبة الفيديوهات</h3>
            <ul>
                <li>
                    <a href="{{ url('/homepage') }}">الصفحة الرئيسية</a>
                </li>
                <li>فيديوهات</li>
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
                <h3>مكتبة الفيديوهات<span></span></h3>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($videos_categories as $category)

                    <div class="col-lg-3 col-md-3">
                        <div class="blog-item" >
                            <a  href="{{ route('platform.videoscategory.show', $category->id) }}">
                                <img src="{{ url('public/videos_categories/' . $category->cat_image) }}" style="height:250px ; object-fit: cover" class="img-fluid" alt="Blog Images">
                            </a>
                           <div class="content">
                                <span><i class="flaticon-calendar-1"></i>{{$category->created_at}}</span>
                                <h3><a href="{{ route('platform.videoscategory.show', $category->id) }}"> {{$category->cat_name}}</a></h3>
                                <a href="{{ route('platform.videoscategory.show', $category->id) }}" class="read-btn">قراءة المزيد</a>
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

            {{-- <div class="col-lg-4">
                <div class="side-bar-area pl-20">
                    <a href="#" class="calc-btn" style="background-color: #72ae44;" type="submit">
                        calc
                    </a>

                    <div class="search-widget">
                        <form class="search-form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>


                    <div class="side-bar-widget">
                        <h3 class="title">Recent Post</h3>
                        <div class="widget-popular-post">
                            <article class="item">
                                <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            5 Tips For Making Delicious Food For all
                                        </a>
                                    </h4>

                                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                </div>
                            </article>

                            <article class="item">
                                <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            Top 15 Vegan Easy Recipe to Get More Details
                                        </a>
                                    </h4>

                                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                </div>
                            </article>

                            <article class="item">
                                <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg3" role="img"></span>
                                </a>
                                <div class="info">

                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            Restaurants cafe Popular Recipe from Our Site
                                        </a>
                                    </h4>

                                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                </div>
                            </article>

                            <article class="item">
                                <a href="blog-details.html" class="thumb">
                                    <span class="full-image cover bg4" role="img"></span>
                                </a>
                                <div class="info">

                                    <h4 class="title-text">
                                        <a href="blog-details.html">
                                            Top 8 Ways for Living Healthy Life Important
                                        </a>
                                    </h4>

                                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="side-bar-widget">
                        <h3 class="title-tag">Popular Tags</h3>
                        <ul class="side-bar-widget-tag">
                            <li><a href="tags.html" target="_blank">Health</a></li>
                            <li><a href="tags.html" target="_blank">Food</a></li>
                            <li><a href="tags.html" target="_blank">Happy</a></li>
                            <li><a href="tags.html" target="_blank">Nutrition</a></li>
                            <li><a href="tags.html" target="_blank">Doctor</a></li>
                            <li><a href="tags.html" target="_blank">Work</a></li>
                            <li><a href="tags.html" target="_blank">Organic</a></li>
                            <li><a href="tags.html" target="_blank">Healthy</a></li>
                        </ul>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Blog Widget Area End -->

@endsection
