<!DOCTYPE html>

<html lang="en" direction="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>NO Name</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:-->
    <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--<link href="../../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>-->

    <!--RTL version:-->
    <link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


<div class="text-center">
    @if($errors->all())
        <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"
         id="m_login" style="background-image: url(assets/app/media/img//bg/bg-1.jpg);">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="assets/app/media/img/logos/logo-1.png">
                    </a>
                </div>

                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title"> سوق بدون اسم المركزي </h3>
                        <div class="m-login__desc"> ادخل بياناتك لانشاء حساب جيد :</div>
                    </div>
                    {{--start register from--}}
                    <form class="m-login__form m-form" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder=" اسم المستخدم" name="name"
                                   value="{{ old('name') }}" required autofocus>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="number" placeholder="رقم الجوال" name="phone"
                                   value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="   البلد" name="country"
                                   value="{{ old('country') }}" required>
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="   المحافظه" name="governorate"
                                   value="{{ old('governorate') }}" required>
                        </div>

                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder=" كلمه المرور "
                                   name="password">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password"
                                   placeholder=" تاكيد كلمه المرور   " name="password_confirmation">
                        </div>

                        <div class="row form-group m-form__group m-login__form-sub">

                            <div class="col m--align-right">
                                    <label class="m-checkbox m-checkbox--light">
                                    <input type="checkbox" name="agree">
                                    موافق علي <a href="#" class="m-link m-link--focus"> الشروط و الاحكام </a>.
                                    <span></span>
                                </label>
                                <span class="m-form__help"></span>
                            </div>

                            <div class="col m--align-left">
                                <div class="m-radio-inline">
                                    <label style="color: #fff;"  class="m-radio m-radio--bold m-radio--state-success">
                                        <input type="radio" name="type" value="3" > مزارع
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--bold m-radio--state-success" style="color: #fff;">
                                        <input  type="radio" name="type" value="2" checked>
                                            تاجر
                                        <span></span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit"
                                    class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                انشاء حساب
                            </button>&nbsp;&nbsp;
                            <a href="{{url('/login')}}">
                                <button type="button"
                                        class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">تسجيل دخول
                                </button>
                            </a>
                        </div>
                    </form>
                    {{--start register from--}}
                </div>


            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>