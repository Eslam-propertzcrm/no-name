@extends('layouts.app')
@section('content')
    <div class="m-portlet m-portlet--tab">
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" method="post"
              action="{{url('/submitDelegateDoneOrder')}}">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-md-12 form-group">

                        <select class="form-control m-input" name="dealer_id">
                            <option selected disabled> اختار التاجر</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group m-form__group row">


                    <div class="col-md-6 form-group">
                        <div class="col-10">
                            <select class="form-control m-input" name="productName[]">
                                <option selected disabled> اختار نوع الخضار</option>
                                @foreach($vegetables as $vegetable)

                                    <option value="{{$vegetable->product}}">
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


                    <div class="col-md-6 form-group">
                        <input class="form-control m-input" name="numberBox[]" type="number"
                               placeholder=" عدد  الصناديق "
                               id="example-number-input">
                        <span style="color: #F66E84">اقل عدد صناديق مسموح به 50 صندوق</span>
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

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>




@stop