@extends('layouts.app')
@section('content')

    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                الملف الشخصي
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="{{url('/')}}/assets/app/media/img/users/user4.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{auth()->user()->name}}</span>
                                <a href="" class="m-card-profile__email m-link"> {{auth()->user()->phone}}</a>
                            </div>
                        </div>
                        <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                            <li class="m-nav__separator m-nav__separator--fit"></li>
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">Section</span>
                            </li>


                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">الرسائل</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-graphic-2"></i>
                                    <span class="m-nav__link-text">المبيعات</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-time-3"></i>
                                    <span class="m-nav__link-text">الاحداث</span>
                                </a>
                            </li>

                        </ul>
                        <div class="m-portlet__body-separator"></div>
                        <div class="m-widget1 m-widget1--paddingless">
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title"> المكسب</h3>
                                        <span class="m-widget1__desc"> المكسب الاسبوعي</span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-brand">+$17,800</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">الطلبيات</h3>
                                        <span class="m-widget1__desc">الطلبيات الاسبوعيه</span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-danger">+1,800</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab"
                                       href="#m_user_profile_tab_1" role="tab">
                                        <i class="flaticon-share m--hide"></i>
                                        تعديل الملف الشخصي
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right"
                                  method="post" action="{{url('/profile/'.auth()->user()->id)}}">
                                @csrf


                                <div class="m-portlet__body">

                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label"> الاسم</label>
                                        <div class="col-10">
                                            <input class="form-control m-input" placeholder=" ادخل  اسم  المستخدم "
                                                   name="name" type="text"
                                                   id="example-text-input" value="{{auth()->user()->name}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="example-number-input" class="col-2 col-form-label">رقم
                                            الجوال </label>
                                        <div class="col-10">
                                            <input class="form-control m-input" name="phone" type="number"
                                                   placeholder="ادخل رقم الجوال "
                                                   id="example-number-input" value="{{auth()->user()->phone}}" required>
                                        </div>
                                    </div>


                                    <div class="form-group m-form__group  row">

                                        <label for="example-number-input" class="col-2 col-form-label"> البلد </label>

                                        <div class="col-10">
                                            <select class="form-control m-input" name="country" id="country" required
                                                    style="padding: 0px 1.5rem;">
                                                <option selected disabled>اختار بلد المستخدم</option>
                                                <option value="مصر" {{auth()->user()->country == 'مصر' ? 'selected ':''}} >
                                                    مصر
                                                </option>
                                                <option value="الاردن" {{auth()->user()->country == 'الاردن' ? 'selected ':''}} >
                                                    الاردن
                                                </option>
                                                <option value="السعوديه" {{auth()->user()->country == 'السعوديه' ? 'selected ':''}} >
                                                    السعوديه
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">

                                        <label for="example-number-input" class="col-2 col-form-label">
                                            المحافظه </label>


                                        <div class="col-10">
                                            <select class="form-control m-input" name="governorate" id="governorate"
                                                    required
                                                    style="padding: 0px 1.5rem;">
                                                <option selected>اختار المحافظه</option>
                                                <option value="{{auth()->user()->governorate}}"
                                                        selected> {{auth()->user()->governorate}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label"> المدينه</label>
                                        <div class="col-10">
                                            <input class="form-control m-input" placeholder=" ادخل المدينه "
                                                   value="{{auth()->user()->city}}"
                                                   name="city" type="text"
                                                   id="example-text-input" required>
                                        </div>
                                    </div>


                                    <div class="form-group m-form__group row">
                                        <label for="example-password-input" class="col-2 col-form-label">كلمه
                                            المرور </label>
                                        <div class="col-10">
                                            <input class="form-control m-input" name="password" type="password"
                                                   placeholder="ادخل كلمه المرور"
                                                   id="example-password-input">
                                        </div>
                                    </div>


                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-10">
                                                <button type="submit" class="btn btn-success"> حفظ</button>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop