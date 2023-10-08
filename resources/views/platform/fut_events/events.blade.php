@extends('platform.platform_master')
@section('body')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3>الفعاليات المستقبلية</h3>
                <ul>
                    <li>
                        <a href="/homepage">الصفحة الرئيسية</a>
                    </li>
                    <li>الفعاليات المستقبلية</li>
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
                    <h3>الفعاليات المستقبلية</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ( $fut_events as $event )
                            <div class="col-lg-12 col-md-12 align-items-center text-center">
                                <div class="blog-item">
                                        <img src="{{ url('public/fut_events/' . $event->image) }}" style="height:300px ; object-fit: cover ; width: 100%" alt="Blog Images">
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> {{$event->created_at}}</span>
                                        <p>{{$event->name}}</p>
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
