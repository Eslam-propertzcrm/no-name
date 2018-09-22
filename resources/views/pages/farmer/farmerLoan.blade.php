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
                        طلب القرض الحسن
                    </h3>
                </div>
            </div>
        </div>
    <?php

    ?>
    <!--begin::Form-->
        @if( \App\farmerLoan::where('user_id', '=', auth()->user()->id)->get()->isEmpty())
            <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{url('/farmerLoan')}}">
                @csrf
                <div class="m-portlet__body">

                    <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label"> مبلغ القرض</label>
                        <div class="col-10">
                            <input class="form-control m-input" placeholder=" ادخل   مبلغ القرض " name="amountLoan"
                                   type="number" id="example-text-input" value="{{ old('amountLoan') }}">
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label for="example-number-input" class="col-2 col-form-label"> نوع العمله </label>
                        <div class="col-10">
                            <select class="form-control m-input" name="currency">
                                <option {{ old('currency')==0?'selected' :''}} disabled> اختار نوع العمله</option>
                                <option value="1" {{ old('currency')==1?'selected' :''}}>جنيه مصري</option>
                                <option value="2" {{ old('currency')==2?'selected' :''}}> ريال سعودي</option>
                                <option value="3" {{ old('currency')==3?'selected' :''}}> دينار اردني</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label for="example-number-input" class="col-2 col-form-label"> ملكيه المزرعه </label>
                        <div class="col-10">
                            <select class="form-control m-input" name="ownership">
                                <option {{ old('ownership')==0?'selected' :''}}  disabled>اختار نوع ملكيه المزرعه
                                </option>
                                <option value="1" {{ old('ownership')==1?'selected' :''}}>ملك</option>
                                <option value="2" {{ old('ownership')==2?'selected' :''}}> ايجار</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label for="example-number-input" class="col-2 col-form-label"> الجنسيه </label>
                        <div class="col-10">
                            <select class="form-control m-input" name="nationality">
                                <option {{ old('nationality')==0?'selected' :''}} disabled> اختار الجنسيه</option>
                                <option value="1" {{ old('nationality')==1?'selected' :''}}> مواطن</option>
                                <option value="2" {{ old('nationality')==2?'selected' :''}}> اجنبي</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-success"> طلب قرض</button>
                                <a href="{{url('/farmerProduct')}}">
                                    <button type="button" class="btn btn-secondary"> الغاء</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <div style="min-height: 300px; padding-top: 100px;" class="container text-center">

                <h2> جاري معالجه طلبك <br>
                    و سيتم الرد عليك في اقرب وقت ممكن
                </h2>
            </div>
        @endif
    </div>


@stop