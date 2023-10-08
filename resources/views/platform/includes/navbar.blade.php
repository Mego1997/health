        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                         <div class="logo">
                            <a href="{{ url('/homepage') }}">
                                <img src="{{ url('public/platform/assets/images/logooo.png') }}" class="logo-one" alt="Logo">
                                <img src="{{ url('public/platform/assets/images/logooo-white.png') }}" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="{{ url('/homepage') }}">
                            <img src="{{ url('public/platform/assets/images/logooo.png') }}" class="logo-one" alt="Logo">
                            <img src="{{ url('public/platform/assets/images/logooo-white.png') }}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ url('/homepage') }}" class="nav-link active">
                                        الصفحة الرئيسية
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                         المكتبة
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            @foreach ($libraries as $library )
                                            <a href="{{  $library->href_name }}" class="nav-link">
                                                {{ $library->library_name }}
                                            </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/team') }}" class="nav-link">
                                        فريق العمل
                                        {{-- <i class='bx bx-chevron-down'></i> --}}
                                    </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link">Shop</a>
                                        </li>
                                    </ul> --}}
                                </li>


                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        الخدمات
                                        {{-- <i class='bx bx-chevron-down'></i> --}}
                                    </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service-1.html" class="nav-link">
                                                Services Style One
                                            </a>
                                        </li>
                                    </ul> --}}
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        الفعاليات
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('/per_events') }}" class="nav-link">
                                                فعاليات دورية
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/non_events') }}" class="nav-link">
                                            فعاليات غير دورية
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/fut_events') }}" class="nav-link">
                                                فعاليات مستقبلية
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        المهمة
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        الرؤية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        اتصل بنا
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <div class="search-btn">
                                        <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                            <i class='bx bx-search'></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="optional-item">
                                    <a href="appointment.html" class="default-btn two">احجز موعد</a>
                                </div>
                            </div>

                            <div class="mobile-nav">
                                <div class="mobile-other d-flex align-items-center">
                                    <div class="optional-item">
                                        <div class="search-btn">
                                            <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                                <i class='bx bx-search'></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="optional-item">
                                        <a href="appointment.html" class="default-btn two">Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
