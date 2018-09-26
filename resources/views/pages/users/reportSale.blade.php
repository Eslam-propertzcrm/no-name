@extends('layouts.app')
@section('content')
    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>

                <th>#</th>
                <th> اسم المندوب</th>
                <th> اسم التاجر</th>
                <th> رقم الجوال</th>
                <th>تاريخ الطلب</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($orders as $key=>$order)
                <tr>

                    <td>{{$order->id}}</td>
                    <td>{{ $order->userDelegate->name}}</td>
                    <td>{{ $order->userDealer->name}}</td>
                    <td>{{ $order->userDealer->phone}}</td>
                    <td>{{ $order->created_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$order->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>

                        <a href="{{url('/priceUpdate/'.$order->id.'/edit')}}"
                           data-toggle="modal" data-target="#myModal{{$order->id}}"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                           title="View">
                            <i class="la 	la-eye"></i> </a>

                        <form id="delete-form-{{$order->id}}" method="POST"
                              action="{{url('/deleteReportSale').'/'.$order->id}}"
                              enctype="multipart/form-data">
                            @csrf

                        </form>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    {{--start modal --}}
    @foreach ($orders as $order)
        <div id="myModal{{$order->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">

                        <table class="table table-striped m-table">


                            <tbody>
                            <tr>
                                <th>اسم التاجر</th>
                                <td> {{$order->userDealer->name}}</td>
                            </tr>
                            <tr>
                                <th>تاريخ الطلب</th>
                                <td> {{$order->created_at}}</td>
                            </tr>

                            @foreach($order->products as $product)

                                <tr>
                                    <th> نوع الخضار</th>
                                    <td> {{$product->productName}}</td>
                                </tr>

                                <tr>
                                    <th> عدد الصناديق</th>
                                    <td> {{$product->numberBox}}</td>
                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        {{--end modal --}}
    @endforeach
@stop


@section('script')
    <script src="{{url('/assets/myDataTable.js')}}"></script>
@stop