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
        <form class="m-form m-form--fit m-form--label-align-right" method="post"
              action="{{url('/farmerProduct/'.$farmerProduct->id)}}">
            @csrf
            {{method_field('put')}}

            <div class="m-portlet__body">

                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label"> اسم المنتج</label>
                    <div class="col-10">
                        <input class="form-control m-input" placeholder=" ادخل  اسم   المنتج " name="name" type="text"
                               id="example-text-input" value="{{$farmerProduct->name}}">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> عدد الصناديق </label>
                    <div class="col-10">
                        <input class="form-control m-input" name="numberBox" type="number"
                               placeholder="     اقل عدد مسموح به 50 صندوق "
                               id="example-number-input" value="{{$farmerProduct->numberBox}}">
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> سعر الصندوق</label>
                    <div class="col-10">
                        <input class="form-control m-input" name="priceBox" type="number"
                               placeholder=" ادخل سعر الصندوق "
                               id="example-number-input" value="{{$farmerProduct->priceBox}}">
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

                            <a href="{{url('/farmerProduct')}}">
                                <button type="button" class="btn btn-secondary">الغاء</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@stop