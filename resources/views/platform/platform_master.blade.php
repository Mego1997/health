
<!doctype html>
<html lang="ar" dir="rtl">

        @include('platform.includes.head')

    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- Preloader End -->

        @include('platform.includes.header')

        @include('platform.includes.navbar')

        <div>
            @yield('body')
        </div>


        @include('platform.includes.footer')
        @include('platform.includes.script')


    </body>
</html>
