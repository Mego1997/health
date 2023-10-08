@extends('platform.platform_master')
@section('body')
    <div class="banner-slider-area">
        <div class="banner-slider owl-carousel owl-theme">
            <div class="banner-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-item-content">
                                <h1>التغذية الجيدة تمنع مرضك</h1>
                                <p>الأكل الصحي هو أسلوب حياة ، لذلك من المهم إنشاء إجراءات روتينية بسيطة وواقعية وصالحة للعيش في نهاية المطاف. </p>
                                <div class="banner-btn">
                                    <a href="about.html" class="default-btn">اعرف المزيد</a>
                                    <a href="contact.html" class="default-btn two">اتصل بنا</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pe-0">
                            <div class="banner-item-img">
                                <img src="{{ url('public/platform/assets/images/home-two/home-two-img1.jpg') }}" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-item-content">
                                <h1>معكرونة مخبوزة صحية ولذيذة</h1>
                                <p>الأكل الصحي مهمة صعبة لأنه ليس من السهل قول "لا" للوجبات السريعة.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="default-btn">اعرف المزيد</a>
                                    <a href="contact.html" class="default-btn two">اتصل بنا</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pe-0">
                            <div class="banner-item-img">
                                <img src="{{ url('public/platform/assets/images/home-two/home-two-img2.jpg') }}" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-item-content">
                                <h1>التغذية بخيارات الأطعمة الصحية</h1>
                                <p>يمكن أن يكون الطعام الذي تتناوله إما أكثر أشكال الأدوية أمانًا وقوة أو أبطأ شكل من أشكال السم.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="default-btn">اعرف المزيد</a>
                                    <a href="contact.html" class="default-btn two">اتصل بنا</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pe-0">
                            <div class="banner-item-img">
                                <img src="{{ url('public/platform/assets/images/home-two/home-two-img3.jpg') }}" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-shape-two">
            <img src="{{ url('public/platform/assets/images/shape/shape1.png ') }}" alt="Banner Images">
            <img src="{{ url('public/platform/assets/images/shape/shape2.png ') }}" alt="Banner Images">
            <img src="{{ url('public/platform/assets/images/shape/shape3.png ') }}" alt="Banner Images">
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Banner Bottom Area -->
    <div class="banner-bottom-area pt-50 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="banner-bottom-item">
                        <i class="flaticon-calendar-1"></i>
                        <h3>تمرين يومي</h3>
                        <p>ماذا تأكل عندما لا ينظر أحد؟ إذا كنت تعتقد أن لا أحد سيعرف ، فأنت مخطئ. سيظهر على جسدك إذا جعلت الغش عادة كل يوم. بالمناسبة ، ألا تغش نفسك؟</p>
                        <a href="about.html" class="learn-btn">اقرأ المزيد</a>
                        <div class="top-shape">
                            <img src="{{ url('public/platform/assets/images/shape/shape5.png ') }}" alt="Images">
                            <img src="{{ url('public/platform/assets/images/shape/shape6.png ') }}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="banner-bottom-item">
                        <i class="flaticon-diet"></i>
                        <h3>أغذية طبيعية</h3>
                        <p>لا يعني تناول الطعام الصحي حرمان نفسك من خيارات الطعام اللذيذة والمتنوعة. ليس هناك ضرر من تذوق القليل من كل شيء. مرة أخرى ، التحكم في جزء هو المفتاح.</p>
                        <a href="about.html" class="learn-btn">اقرأ المزيد</a>
                        <div class="top-shape">
                            <img src="{{ url('public/platform/assets/images/shape/shape5.png ') }}" alt="Images">
                            <img src="{{ url('public/platform/assets/images/shape/shape6.png ') }}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="banner-bottom-item">
                        <i class="flaticon-plan"></i>
                        <h3>خطط التغذية</h3>
                        <p>هذا صحيح - أنت ما تأكله. الأطعمة التي تحتوي على مكونات غير طبيعية سريعة التحضير ورخيصة بشكل مدهش. لكنك ستدفع ثمناً باهظاً لاحقاً. لذا ، كن على دراية باختيارات الطعام التي تقوم بها الآن. </p>
                        <a href="about.html" class="learn-btn">اقرأ المزيد</a>
                        <div class="top-shape">
                            <img src="{{ url('public/platform/assets/images/shape/shape5.png ') }}" alt="Images">
                            <img src="{{ url('public/platform/assets/images/shape/shape6.png ') }}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- About Area Two -->
<div class="about-area-two pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content-two">
                    <div class="section-title">
                        <span>معلومات عنا</span>
                        <h2>غير حياتك في الـ 90 يومًا القادمة من الممارسة</h2>
                        <p>
                            باستخدام هذه الاقتباسات العشرين للطعام الصحي ، يمكنك وضع حد لرغباتك الغذائية غير الصحية. ضعها على الثلاجة وخزائن المطبخ والمكتب. هذه فقط مدهشة! قم بالتمرير لأسفل للتحقق منها.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-content-item">
                                <i class="flaticon-diet"></i>
                                <h3>خطة التغذية الشخصية</h3>
                                <p>عندما يكون النظام الغذائي خاطئًا ، فلا فائدة من الدواء. إذا كانت الحمية صحيحة، لا حاجة للأدوية</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-content-item">
                                <i class="flaticon-exercise"></i>
                                <h3>خطة تمارين شخصية</h3>
                                <p>إذا احتفظت بطعام جيد في ثلاجتك ، فسوف تأكل طعامًا جيداً</p>
                            </div>
                        </div>
                    </div>

                    <a href="about.html" class="default-btn">إقرأ المزيد</a>
                </div>
            </div>

            <div class="col-lg-6 pe-0">
                <div class="about-img">
                    <img src="{{ url('public/platform/assets/images/about/about-img.png') }}" alt="Images">
                </div>
            </div>
        </div>
    </div>

    <div class="about-shape-two">
        <img src="{{ url('public/platform/assets/images/shape/shape2.png ') }}" alt="About Images">
        <img src="{{ url('public/platform/assets/images/shape/shape3.png ') }}" alt="About Images">
    </div>
</div>
<!-- About Area Two End -->

    <!-- Team Area -->
    <div class="team-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>خبراء التغذية المشهورين لدينا</span>
                <h2>أخصائي التغذية لدينا</h2>
            </div>

        <div class="row pt-45 justify-content-center">


            @foreach ($doctors->slice(0,4) as $doctor)
                <div class="col-lg-3 col-sm-6">

                    <div class="team-card active">
                        <div class="team-img">
                            <a href="{{ route('doctors.show', $doctor->id) }}">
                                <img src="{{ url('public/doctors/' . $doctor->doc_image) }}">
                            </a>
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('doctors.show', $doctor->id) }}">Dr. {{ $doctor->doc_name }}</a></h3>
                            <span>{{ $doctor->doc_spec }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="text-center mt-3 ">
                    <a href="{{url('/team')}}" class="fw-bold border p-3 shadow"  style="color: #72ae44; bordar-color:#72ae44;" ><span>عرض الكل</span> <i class="fa fa-arrow-left"></i></a>

                </div>


        </div>

    </div>
</div>
<!-- Team Area End -->

<!-- Services Area -->
<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>ماذا نقدم</span>
            <h2> خدمات النظام الغذائي والتغذية</h2>
        </div>

        <div class="row pt-45 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <a href="service-details.html">
                        <img src="{{ url('public/platform/assets/images/services/img1.jpg') }}" alt="Images">
                    </a>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">برنامج إنقاص الوزن</a>
                        </h3>
                        <p>
                            بقدر ما نرغب في اتخاذ خيارات غذائية صحية ، فقد يكون من الصعب الالتزام بنظام غذائي متوازن عندما تكون الراحة وسهولة الخيارات الأقل حميدة في كل مكان - طوال الوقت اللعين. من أجل التحفيز ، اقرأ وتذكر هذه الاقتباسات الخمسة والعشرين عن الأكل الصحي.
                        </p>
                        <a href="service-details.html" class="learn-btn">اقرأ المزيد</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <a href="service-details.html">
                        <img src="{{ url('public/platform/assets/images/services/img2.jpg') }}" alt="Images">
                    </a>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">اختبار الاستجابة التغذوية</a>
                        </h3>
                        <p>
                            عندما يكون النظام الغذائي خاطئًا ، لا فائدة من الدواء. إذا كانت الحمية صحيحة، لا حاجة للأدوية.
                        </p>
                        <a href="service-details.html" class="learn-btn">اقرأ المزيد</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <a href="service-details.html">
                        <img src="{{ url('public/platform/assets/images/services/img3.jpg') }}" alt="Images">
                    </a>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">التغذية العلاجية</a>
                        </h3>
                        <p>
                            إذا احتفظت بطعام جيد في ثلاجتك ، فستأكل طعامًا جيدًا.
                        </p>
                        <a href="service-details.html" class="learn-btn">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!-- Work Area -->
<div class="work-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>كيف تعمل</span>
                <h2>4 خطوات سهلة لحياة سعيدة</h2>
        </div>
        <div class="row pt-45 justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="work-card work-bg1">
                    <div class="content">
                        <i class="flaticon-contact-book"></i>
                        <h3>تواصل معنا</h3>
                        <p>إذا احتفظت بطعام جيد في ثلاجتك ، فستأكل طعامًا جيدًا. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="work-card work-bg2">
                    <div class="content">
                        <i class="flaticon-calendar-1"></i>
                        <h3>ميعاد</h3>
                        <p>لن يتعامل طبيب المستقبل بعد الآن مع الإطار البشري بالعقاقير</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="work-card work-bg3">
                    <div class="content">
                        <i class="flaticon-research"></i>
                        <h3>تحليل</h3>
                        <p>عندما يكون النظام الغذائي خاطئًا ، لا فائدة من الدواء. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="work-card work-bg4">
                    <div class="content">
                        <i class="flaticon-happiness"></i>
                        <h3>حياة سعيدة</h3>
                        <p>قد تضطر إلى خوض معركة أكثر من مرة للفوز بها. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Work Area End -->

<!-- Choose Area -->
<div class="choose-area ptb-100 pb-70">
    <div class="container">
        <div class="choose-content">
            <div class="section-title">
                <span>سبب الاختيار</span>
                <h2>لماذا تختار دليل الصحة؟</h2>
            </div>

            <div class="content">
                <h3>أنظمة غذائية صحية</h3>
                <p>تناول وجبة الإفطار مثل الملك ، والغداء مثل الأمير ، والعشاء مثل الفقير.</p>
                <div class="number">1</div>
            </div>

            <div class="content">
                <h3>استراتيجيات التغذية</h3>
                <p>نظامك الغذائي هو حساب مصرفي. الخيارات الغذائية الجيدة هي استثمارات جيدة. </p>
                <div class="number">2</div>
            </div>

            <div class="content">
                <h3>الدعم الفردي</h3>
                <p>التغذية السليمة هي الفرق بين الشعور بالإرهاق وتحقيق أقصى استفادة من التمرين. </p>
                <div class="number">3</div>
            </div>

            <div class="content">
                <h3>تمرن يوميا</h3>
                <p>التمرين هو الملك. التغذية ملكة. ضعهم معًا وستحصل على مملكة.</p>
                <div class="number">4</div>
            </div>
        </div>
    </div>
</div>
<!-- Choose Area End -->

<!-- Pricing Area -->
<div class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>خطة الأسعار</span>
            <h2>اختر أفضل خطة لديك</h2>
        </div>

        <div class="row pt-45 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-title">
                        <h3>$25</h3>
                        <span>بداية</span>
                    </div>
                    <ul>
                        <li><i class='bx bx-check'></i> 20 تمرين</li>
                        <li><i class='bx bx-check'></i> خطط الوجبات وتحليلها</li>
                        <li><i class='bx bx-check'></i> تقييم الوزن</li>
                        <li><i class='bx bx-check'></i> الأنشطة البدنية</li>
                        <li><i class='bx bx-check'></i> مراقبة العميل</li>
                        <li><i class='bx bx-check'></i> 24/7 دعم</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="default-btn">احجز الآن</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-title">
                        <h3>$45</h3>
                        <span>متقدم</span>
                    </div>
                    <ul>
                        <li><i class='bx bx-check'></i> 20 تمرين</li>
                        <li><i class='bx bx-check'></i> خطط الوجبات وتحليلها</li>
                        <li><i class='bx bx-check'></i> تقييم الوزن</li>
                        <li><i class='bx bx-check'></i> الأنشطة البدنية</li>
                        <li><i class='bx bx-check'></i> مراقبة العميل</li>
                        <li><i class='bx bx-check'></i> 24/7 دعم</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="default-btn">احجز الآن</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-title">
                        <h3>$45</h3>
                        <span>متميز</span>
                    </div>
                    <ul>
                        <li><i class='bx bx-check'></i> 30 تمرين</li>
                        <li><i class='bx bx-check'></i> خطط الوجبات وتحليلها</li>
                        <li><i class='bx bx-check'></i> تقييم الوزن</li>
                        <li><i class='bx bx-check'></i> الأنشطة البدنية</li>
                        <li><i class='bx bx-check'></i> مراقبة العميل</li>
                        <li><i class='bx bx-check'></i> 24/7 دعم</li>
                    </ul>

                    <div class="price-btn-area text-center">
                        <a href="pricing.html" class="default-btn">احجز الآن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-shape">
        <img src="{{ url('public/platform/assets/images/shape/shape4.png ') }}" alt="Pricing Shape">
    </div>
</div>
<!-- Pricing Area End -->

<!-- Calculate Area -->
<div class="calculate-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="calculate-form">
                    <h2>احسب مؤشر كتلة الجسم</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please Enter Height" placeholder="Height*">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please Enter Weight" placeholder="Weight*">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please Enter Age" placeholder="Age*">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-select form-control">
                                        <option selected>حدد نوع الجنس*</option>
                                        <option value="1">ذكر</option>
                                        <option value="2">أنثى</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-select form-control">
                                        <option selected>حدد عامل النشاط *</option>
                                        <option value="1">رفع الاثقال</option>
                                        <option value="2">اليوغا العضوية</option>
                                        <option value="3">يوجا القوة</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    احسب
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="calculate-chart ml-20">
                    <h2>مخطط حاسبة مؤشر كتلة الجسم</h2>
                    <ul>
                        <li> مؤشر كتلة الجسم <span>حالة الوزن</span></li>
                        <li>أقل من 18.5 <span>تحت الوزن</span></li>
                        <li>18.5 - 22.5<span>صحيح</span></li>
                        <li>أقل من 18.5 <span>تحت الوزن</span></li>
                        <li>25.0 - 30.0 <span>زيادة الوزن</span></li>
                        <li>30..0 - أعلاه <span>سمين</span></li>
                    </ul>

                    <p>* معدل التمثيل الغذائي BMR / مؤشر كتلة الجسم BMI</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Calculate Area End -->

<!-- Blog Area Two -->
<div class="blog-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>أحدث الأخبار</span>
            <h2>أحدث وصفة من المدونة</h2>
        </div>

        <div class="row pt-45 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ url('public/platform/assets/images/blog/img1.jpg') }}" alt="Blog Images">
                    </a>
                   <div class="content">
                        <span><i class="flaticon-calendar-1"></i> 22 أبريل 2021</span>
                        <h3><a href="blog-details.html">7 وصفات كعكة وصحية وبسيطة وخالية من الغلوتين</a></h3>
                        <a href="blog-details.html" class="read-btn">اقرأ أكثر</a>
                   </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ url('public/platform/assets/images/blog/img2.jpg') }}" alt="Blog Images">
                    </a>
                   <div class="content">
                        <span><i class="flaticon-calendar-1"></i> 23 أبريل 2021</span>
                        <h3><a href="blog-details.html">أهم 5 نصائح لماذا تعتبر الرعاية الذاتية أكثر أهمية</a></h3>
                        <a href="blog-details.html" class="read-btn">اقرأ أكثر</a>
                   </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ url('public/platform/assets/images/blog/img3.jpg') }}" alt="Blog Images">
                    </a>
                   <div class="content">
                        <span><i class="flaticon-calendar-1"></i> 24 أبريل 2021</span>
                        <h3><a href="blog-details.html">أهم 8 طرق لعيش حياة صحية</a></h3>
                        <a href="blog-details.html" class="read-btn">اقرأ أكثر</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area Two End -->
@endsection
