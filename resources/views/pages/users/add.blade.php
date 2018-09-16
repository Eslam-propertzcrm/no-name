@extends('layouts.app')
@section('content')


    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                    <h3 class="m-portlet__head-text">
                        اضافه مستخدم جديد
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right">
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label"> الاسم</label>
                    <div class="col-10">
                        <input class="form-control m-input" placeholder="ادخل  اسم  المستخدم " type="text"
                               id="example-text-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label">رقم الجوال </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="number" placeholder="ادخل رقم الجوال "
                               id="example-number-input">
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> البلد</label>
                    <div class="col-10">
                        <select class="form-control m-input">
                            <option selected disabled>اختار بلد المستخدم</option>
                            <option value="1">مصر</option>
                            <option value="2">الاردن</option>
                            <option value="3">السعوديه</option>
                            <option value="3">عمان</option>
                        </select>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> المحافظه</label>
                    <div class="col-10">
                        <select class="form-control m-input">
                            <option selected disabled> اختار محافظه المستخدم</option>
                            <option value="1"> القاهره</option>
                            <option value="2">اسيوط</option>
                            <option value="3">بنها</option>
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> الرتبه</label>
                    <div class="col-10">
                        <select class="form-control m-input">
                            <option selected disabled>اختار رتبه المستخدم</option>
                            <option value="2">تاجر</option>
                            <option value="3">وكيل</option>
                            <option value="3">مندوب</option>
                            <option value="3">موظف استقبال</option>
                            <option value="1">ادمن</option>
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-password-input" class="col-2 col-form-label">كلمه المرور </label>
                    <div class="col-10">
                        <input class="form-control m-input" type="password" placeholder="ادخل كلمه المرور"
                               id="example-password-input">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-password-input" class="col-2 col-form-label"> تاكيد كلمه المرور</label>
                    <div class="col-10">
                        <input class="form-control m-input" type="password" placeholder=" ادخل تاكيد كلمه المرور "
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
                            <button type="reset" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@stop