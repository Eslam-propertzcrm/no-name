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
                        تعديل بيانات مستخدم
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{url('/user/'.$user->id)}}">
            @csrf
            {{method_field('put')}}
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label"> الاسم</label>
                    <div class="col-10">
                        <input class="form-control m-input" placeholder=" ادخل  اسم  المستخدم " name="name" type="text"
                               id="example-text-input" value="{{$user->name}}">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label">رقم الجوال </label>
                    <div class="col-10">
                        <input class="form-control m-input" name="phone" type="number" placeholder="ادخل رقم الجوال "
                               id="example-number-input" value="{{$user->phone}}">
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> البلد</label>
                    <div class="col-10">
                        <select class="form-control m-input" name="country">
                            <option selected disabled>اختار بلد المستخدم</option>
                            <option value="مصر" {{$user->country == 'مصر' ? 'selected ':''}} >مصر</option>
                            <option value="الاردن" {{$user->country == 'الاردن' ? 'selected ':''}} >الاردن</option>
                            <option value="السعوديه" {{$user->country == 'السعوديه' ? 'selected ':''}} >السعوديه
                            </option>
                            <option value="عمان" {{$user->country == 'عمان' ? 'selected ':''}} >عمان</option>
                        </select>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> المحافظه</label>
                    <div class="col-10">
                        <select class="form-control m-input" name="governorate">
                            <option disabled> اختار محافظه المستخدم</option>
                            <option value="القاهره" {{$user->governorate == 'القاهره' ? 'selected ':''}}> القاهره
                            </option>
                            <option value="اسيوط" {{$user->governorate == 'اسيوط' ? 'selected ':''}}>اسيوط</option>
                            <option value="بنها" {{$user->governorate == 'بنها' ?' selected ':''}}>بنها</option>
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> الرتبه</label>
                    <div class="col-10">
                        <select class="form-control m-input" name="type">
                            <option disabled>اختار رتبه المستخدم</option>
                            <option value="1" {{$user->type == 1 ? 'selected ':''}}>مندوب</option>
                            <option value="2" {{$user->type == 2 ? 'selected ':''}}>تاجر</option>
                            <option value="3" {{$user->type == 3 ? 'selected ':''}}>مزارع</option>
                            <option value="4" {{$user->type == 4 ? 'selected ':''}}>موظف استقبال</option>
                            <option value="0" {{$user->type == 0 ? 'selected ':''}}>مدير</option>
                        </select>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-password-input" class="col-2 col-form-label">كلمه المرور </label>
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
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@stop