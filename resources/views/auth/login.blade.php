@extends('layouts.app_manager')


@section('content_login')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img src="{{ url('public/platform\assets\images\logo.png') }}" alt="branding logo"></div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>تسجيل الدخول</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input name="email" value="{{ old('email') }}" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="user-name" placeholder="إسم المستخدم" required>
                                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="user-password" placeholder="الرقم السري" required>
                                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-12 text-center text-sm-left ">
                                                <fieldset>
                                                    <input type="checkbox"  name="remember" id="remember-me" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember-me"> تذكرني</label>
                                                </fieldset>
                                            </div>
                                            {{-- @if (Route::has('password.request'))
                                            <div class="col-sm-6 col-12 text-center text-sm-right"><a href="{{ route('password.request') }}" class="card-link">?Forgot Password</a></div>
                                            @endif --}}
                                        </div>
                                        <button type="submit" class="btn  btn-lg btn-block text-white" style="background-color: #82b440"><i class="feather icon-unlock"></i> تسجيل الدخول</button>
                                        <br><hr>
                                        <h5>Healthy Dashboard</h5>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>
                                    <p class="float-sm-right text-center m-0">New to Stack? <a href="{{ route('register') }}" class="card-link">Sign Up</a></p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ url('manager_dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('manager_dashboard/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<script src="{{ url('manager_dashboard/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('manager_dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('manager_dashboard/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('manager_dashboard/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
<!-- END: Page JS-->

@endsection
