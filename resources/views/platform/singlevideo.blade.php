@extends('platform.platform_master')
@section('body')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg3">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{$videos->vid_name}}</h3>
                    <ul>
                        <li>
                            <a href="/homepage">الصفحة الرئيسية</a>
                        </li>
                        <li>{{$videos->vid_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Blog Details Area -->
        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <div class="blog-preview-img" style="width: 100% ; height: 400px">
                                <iframe  style="width: 100%; height: 100%;object-fit: cover" src="{{$videos->vid_url}}" allowfullscreen>
                                </iframe>

                                {{-- <img src="{{ Storage::url($videos->vid_image) }}" alt="Blog Images"> --}}
                            </div>
                            <ul class="tag-list">
                                <li><i class='bx bx-calendar'></i> {{$videos->created_at}} </li>
                                {{-- <li><i class='bx bx-comment-dots'></i> {{count($postcomments)}} تعليق </li> --}}
                            </ul>
                            <h2>{{$videos->vid_name}}</h2>

                            <div class="blog-article-content">
                                {!!$videos->vid_description!!}
                            </div>

                            <div class="article-share">
                                <div class="row align-items-center">
                                    {{-- <div class="col-lg-5 col-md-5">
                                        <div class="article-tag">
                                            <ul>
                                                <li class="title">Tags :</li>
                                                <li><a href="blog-details.html" target="_blank">Health,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Food,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Nutrition</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-12 col-md-12">
                                        <div class="article-social-icon">
                                            <ul class="social-icon">
                                                <li class="title">Share :</li>
                                                <li>
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class='bx bxl-facebook'></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                        <i class='bx bxl-linkedin'></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class='bx bxl-twitter'></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class='bx bxl-instagram'></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-wrap">
                                <div class="comment-title">
                                    <h4>  تعليق : {{count($videocomments)}}</h4>
                                </div>

                                <ul class="comment-form">
                                    @foreach ($videocomments as $comment)


                                    <li>
                                        {{-- <img src="assets/images/blog/blog-user.jpg" alt="Image"> --}}
                                        <h3>{{$comment->user->name}}</h3>
                                        <span>{{$comment->created_at}}</span>
                                        <p>
                                            {{$comment->comment}}
                                        </p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="comments-form">
                                <div class="contact-form">
                                    <h4>اترك تعليقاً</h4>
                                    <form id="contactForm">
                                        <div class="row">

                                                    <input type="hidden" name="user_id"  id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                    <input type="hidden" name="artical_id"  id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>تعليق*</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="أكتب التعليق هنا"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    إرسال التعليق
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">


                            {{-- <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Personalized Nutrition
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Health Nutrition
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Weight Loss Program
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Sports Nutritionist
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Child Nutritionist
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.html" target="_blank">
                                            Workout Program
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}

                            <div class="side-bar-widget">
                                <h3 class="title">آخر المنشورات</h3>
                                <div class="widget-popular-post">
                                    @foreach ($recentvideos as $video  )

                                    <article class="item">
                                        <a href="{{ route('platform.singlepost.show', $video->id) }}" class="thumb">
                                            <img src="{{ url('public/videos/' . $video->vid_image) }}" class="full-image cover bg1" role="img">

                                        </a>
                                        <div class="info">
                                            <h4 class="title-text">
                                                <a href="{{ route('platform.singlepost.show', $video->id) }}">
                                                   {{$video->vid_name}}
                                                </a>
                                            </h4>

                                            <a href="{{ route('platform.singlevideo.show', $video->id) }}" class="read-btn" target="_blank">قراءة المزيد</a>
                                        </div>
                                    </article>

                                    @endforeach



                                </div>
                            </div>

                            <div class="side-bar-widget">
                                <h3 class="title-tag">التاج</h3>
                                <ul class="side-bar-widget-tag">
                                    @foreach ($infotags as $tag)
                                    <li><a href="tags.html" target="_blank">{{$tag->tag_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->

        @endsection

