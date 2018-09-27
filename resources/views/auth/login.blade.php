<!DOCTYPE html>

<html lang="en" direction="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title> بدون اسم</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('/css/customStyle.css')}}">
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
    <link rel="shortcut icon" href="{{url('/')}}/assets/demo/default/media/img/logo/logo_default_dark.png"/>


    {{-- end custom style --}}
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700,900" rel="stylesheet">

    <style>
        .invalid-feedback {
            display: block !important;
        }

        body, h1, h2, h3, h4, h5, h6, p, li, a, input, button ,select{
            font-family: 'Roboto', 'Tajawal', sans-serif !important;
        }

        .la-eye {
            font-size: 19px !important;
        }
    </style>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

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


                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title"> سوق بدون اسم المركزي</h3>
                    </div>
                    {{-- start login form--}}
                    <form class="m-login__form m-form" method="POST" action="{{ route('login') }}"
                          aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="number" placeholder=" رقم الجوال" name="phone"
                                   autocomplete="off" value="{{ old('phone') }}" required autofocus>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password"
                                   placeholder=" كلمه المرور " name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>تذكرني
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link"> نسيت كلمه المرور
                                    ؟</a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                                تسجيل الدخول
                            </button>
                        </div>
                    </form>
                    {{-- start login form--}}
                </div>

                <div class="m-login__account">
							<span class="m-login__account-msg">
								 لا تمتلك حساب ؟
							</span>&nbsp;&nbsp;
                    <a href="{{url('/register')}}" class="m-link m-link--light m-login__account-link">
                        انشاء حساب جديد </a>
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