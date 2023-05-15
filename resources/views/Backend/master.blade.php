<!DOCTYPE html>
<html lang="en">

@include('Backend.head')

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
    </div>

    <!--=================================
     preloader -->


    <!--=================================
     header start-->

    @include('Backend.header')

    <!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">
            @include('Backend.main-sidebar')

            <!--=================================
           wrapper -->

            <div class="content-wrapper">

                @yield('page-title')

                @yield('content')

                <!--=================================
                 wrapper -->

                <!--=================================
                 footer -->

                @include('Backend.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->



<!--=================================
 jquery -->

@include('Backend.script')

</body>
</html>
