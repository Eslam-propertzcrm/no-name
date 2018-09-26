@extends('layouts.app')
@section('content')
    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>

                <th>#</th>
                <th> اسم المندوب</th>
                <th> اسم المزارع</th>
                <th>    رقم الجوال</th>
                <th> نوع المنتج</th>
                <th> عدد الصناديق</th>
                <th> حموله الصندوق</th>
                <th> سعر الصندوق</th>
                <th> تاريخ الطلب</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($buyProducts as $key=>$product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{ $product->userDelegate->name}}</td>
                    <td>{{ $product->userFarmer->name}}</td>
                    <td>{{ $product->userDelegate->phone}}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->numberBox}}</td>
                    <td>{{ $product->boxLoad}}</td>
                    <td>{{ $product-> priceBox}}</td>
                    <td>{{ $product->created_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$product->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>


                        <form id="delete-form-{{$product->id}}" method="POST"
                              action="{{url('/deleteReportBuy').'/'.$product->id}}"
                              enctype="multipart/form-data">
                            @csrf

                        </form>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

@stop


@section('script')
    <script src="{{url('/assets/myDataTable.js')}}"></script>
@stop