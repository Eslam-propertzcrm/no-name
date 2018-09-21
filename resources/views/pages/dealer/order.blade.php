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
        <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{url('/dealerOrder')}}">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">
                    <div class="col-md-6 form-group">
                        <input class="form-control m-input" placeholder="ادخل اسم الصنف" name="productName[]"
                               type="text" id="example-text-input">
                    </div>

                    <div class="col-md-6 form-group">
                        <input class="form-control m-input" name="numberBox[]" type="number"
                               placeholder=" عدد  الصناديق "
                               id="example-number-input">
                        <span style="color: #F66E84"> اقل عدد صناديق مسموح به 50 صندوق</span>
                    </div>
                </div>

            </div>
            <div class="form-group m-form__group row">
                <button type="button" class="btn btn-success btn-block appendRow">اضافه صنف جديد للعربه</button>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success"> عمل طلبيه</button>
                            <a href="{{url('/dealerProductGallery')}}">
                                <button type="button" class="btn btn-secondary"> الغاء</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>




@stop