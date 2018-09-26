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
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>


                <th> الصنف</th>
                <th>السعر</th>


            </tr>
            </thead>
            <tbody>

            @foreach($markets as $key=>$market)
                <tr>
                    <td>{{$key  }}</td>
                    <td>{{ $market[0]->price}}</td>

                </tr>

            @endforeach

            </tbody>
        </table>

    </div>



@stop


@section('script')
    <script src="{{url('/assets/myDataTable.js')}}"></script>
@stop