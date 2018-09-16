<!DOCTYPE html>

<html lang="en" direction="rtl" style="direction: rtl">

<!-- begin::Head -->
@include('partial.head')
<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
@include('partial.nav')
<!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
    @include('partial.sideMenu')
    <!-- END: Left Aside -->


        {{--start content--}}

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">اداره المستخدمين </h3>
                    </div>
                    <div>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">

                    @yield('content')

                </div>

            </div>

            <!-- END EXAMPLE TABLE PORTLET-->

        </div>

        {{--edn content--}}
    </div>
    <!-- end:: Body -->

    <!-- begin::Footer -->
@include('partial.footer')
<!-- end::Footer -->
</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
@include('partial.settings&massageSideMenu')

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
@include('partial.script')
<!--end::Page Scripts -->

</body>
<!-- end::Body -->
</html>