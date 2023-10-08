@extends('platform.platform_master')
@section('body')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg8">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{$videoscategory->cat_name}}</h3>
                    <ul>
                        <li>
                            <a href="/homepage">الصفحة الرئيسية</a>
                        </li>
                        <li>{{$videoscategory->cat_name}}</li>
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
                        <h3>{{$videoscategory->cat_name}}</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="row justify-content-center">

                            @foreach ( $videos as $video )
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item ">
                                    <div class="img-video">
                                        <a  href="{{ route('platform.singlevideo.show', $video->id) }}">
                                            <img src="{{ url('public/videos/' . $video->vid_image) }}" style="height:250px ; object-fit: cover ; width: 100%" alt="Blog Images">
                                        </a>
                                        <div class="overlay ">
                                            <a href="{{ route('platform.singlevideo.show', $video->id) }}">
                                                <i class="fa-brands fa-youtube  fa-xl" ></i>
                                            </a>
                                        </div>
                                    </div>

                                   <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> {{$video->created_at}}</span>
                                        <h3><a href="{{ route('platform.singlevideo.show', $video->id) }}">{{$video->vid_name}}</a></h3>
                                        <a href="{{ route('platform.singlevideo.show', $video->id) }}" class="read-btn">قراءة المزيد</a>
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

                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">


                            <div class="search-widget">
                                <form class="search-form">
                                    <input type="search" class="form-control" placeholder="بحث">
                                    <button type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>


                            <div class="side-bar-widget">
                                <h3 class="title">أخر المنشورات</h3>
                                <div class="widget-popular-post">
                                    @foreach ($recentvideos as $recent  )

                                    <article class="item">
                                        <a href="{{ route('platform.singlevideo.show', $recent->id) }}" class="thumb">
                                            <img src="{{ url('public/videos/' . $recent->vid_image) }}" class="full-image cover bg1" role="img">

                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{ route('platform.singlevideo.show', $recent->id) }}">
                                                   {{$recent->vid_name}}
                                                </a>
                                            </h4>

                                            <a href="{{ route('platform.singlevideo.show', $recent->id) }}" class="read-btn" target="_blank">قراءة المزيد</a>
                                        </div>
                                    </article>

                                    @endforeach



                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title-tag">التاج</h3>
                                <ul class="side-bar-widget-tag">
                                    @foreach ($restags as $tag)
                                    <li><a href="tags.html" target="_blank">{{$tag->tag_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Widget Area End -->

@endsection
