@extends('layouts.app')
@section('content')


    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>

                <th>#</th>
                <th> اسم المزارع</th>
                <th> نوع الخضار</th>
                <th>عدد الصناديق</th>
                <th>حموله الصندوق</th>
                <th>سعر الصندوق</th>
                <th>تاريخ الطلب</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($farmerProducts as $key=>$farmerProduct)
                <tr>

                    <td>{{$farmerProduct->id}}</td>
                    <td>{{ $farmerProduct->user->name}}</td>
                    <td>{{ $farmerProduct->name}}</td>
                    <td>{{ $farmerProduct->numberBox}}</td>
                    <td>{{ $farmerProduct->boxLoad}}</td>
                    <td>{{ $farmerProduct->priceBox}}</td>
                    <td>{{ $farmerProduct->created_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$farmerProduct->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>



                        <form id="delete-form-{{$farmerProduct->id}}" method="POST"
                              action="{{url('/deleteFarmerProduct').'/'.$farmerProduct->id}}"
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