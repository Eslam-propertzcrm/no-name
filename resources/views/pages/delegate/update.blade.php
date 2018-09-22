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
                        اضافه منتج جديد
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" method="post"
              action="{{url('/priceUpdate/'.$market->id)}}">
            @csrf
            {{method_field('put')}}
            <div class="m-portlet__body">


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> الدوله </label>
                    <div class="col-10">
                        <select class="form-control m-input" name="country" id="country" required
                        >
                            <option selected disabled> اختار البلد</option>
                            <option value="مصر" {{$market->country == 'مصر' ? 'selected':''}}>مصر</option>
                            <option value="السعوديه" {{$market->country == 'السعوديه' ? 'selected':''}}>السعوديه
                            </option>
                            <option value="الاردن"{{$market->country == 'الاردن' ? 'selected':''}}>الاردن</option>
                        </select>
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> المحافظه </label>
                    <div class="col-10">
                        <select class="form-control m-input" name="governorate" id="governorate" required
                                style="padding: 0px 1.5rem;">
                            <option disabled>اختار المحافظه</option>
                            <option value="{{$market->governorate}}" selected>{{$market->governorate}}</option>
                        </select>
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label"> نوع الخضار </label>
                    <div class="col-10">
                        <select class="form-control m-input" name="product">
                            <option selected disabled> اختار نوع الخضار</option>
                            @foreach($vegetables as $vegetable)

                                <option value="{{$vegetable->product}}" {{$vegetable->product == $market->product? 'selected':''}}>
                                    {{ $vegetable->product }}

                                    {{' ['}}
                                    {{'     حموله الصنوق '}}
                                    <?php
                                    $country = auth()->user()->country;
                                    switch ($country) {
                                        case  'مصر':
                                            echo $vegetable->egypt;
                                            break;

                                        case  'الاردن':
                                            echo $vegetable->Jordan;
                                            break;

                                        case  'السعوديه':
                                            echo $vegetable->Saudi;
                                            break;

                                    }
                                    ?>
                                    {{'كيلو جرام '}}
                                    {{']'}}
                                </option>


                            @endforeach
                        </select>

                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label for="example-number-input" class="col-2 col-form-label"> السعر </label>
                    <div class="col-10">
                        <input class="form-control m-input" value="{{$market->price}}" name="price" type="number"
                               placeholder=" ادخل السعر "
                               id="example-number-input" required>
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
                            <a href="{{url('/priceUpdate')}}">
                                <button type="button" class="btn btn-secondary"> الغاء</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@stop