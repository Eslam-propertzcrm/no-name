@extends('layouts.app')
@section('content')
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    معرض المنتجات
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_2">
            <thead>
            <tr>


                <th> الصنف</th>
                <th>السعر</th>
                <th>المحافظه</th>

            </tr>
            </thead>
            <tbody>

            @foreach($markets as $key=>$market)
                <tr>
                    <td>{{$key  }}</td>
                    <td>{{ $market[0]->price}}</td>
                    <td>{{ $market[0]->governorate}}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
        <hr>


        <div class="m-portlet__body">

            <!--begin::Section-->
            <div class="m-accordion m-accordion--default m-accordion--solid" id="m_accordion_3" role="tablist">

            @foreach($markets as $key=>$market)
                <!--begin::Item-->
                    <div class="m-accordion__item">
                        <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_3_item_1_head"
                             data-toggle="collapse" href="#m_accordion_3_item_1_body{{$key}}" aria-expanded="false">
                            <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                            <span class="m-accordion__item-title">{{$key}}</span>
                            <span class="m-accordion__item-mode"></span>
                        </div>
                        <div class="m-accordion__item-body collapse" id="m_accordion_3_item_1_body{{$key}}"
                             role="tabpanel"
                             aria-labelledby="m_accordion_3_item_1_head" data-parent="#m_accordion_3" style="">
                            <div class="m-accordion__item-content">

                                <table class="table table-bordered m-table m-table--border-success">
                                    <thead>
                                    <tr>
                                        <th>السنف</th>
                                        <th>السعر</th>
                                        <th>المحافظه</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($market as $m)
                                    <tr>
                                        <td> {{$m->product}}</td>
                                        <td> {{$m->price}}</td>
                                        <td> {{$m->governorate}}</td>
                                    </tr>
@endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!--end::Item-->
                @endforeach
            </div>

            <!--end::Section-->
        </div>


    </div>



@stop