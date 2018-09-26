@extends('layouts.app')
@section('content')


    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>

                <th>#</th>
                <th> اسم المزارع</th>
                <th>قيمه القرض</th>
                <th>العمله</th>
                <th>ملكيه المزرعه</th>
                <th>الجنسيه</th>
                <th>تاريخ الطلب</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($farmerLoans as $key=>$farmerLoan)
                <tr>

                    <td>{{$farmerLoan->id}}</td>
                    <td>{{ $farmerLoan->user->name}}</td>
                    <td>{{ $farmerLoan->amountLoan}}</td>
                    <td>{{ $farmerLoan->currency}}</td>
                    <td>{{ $farmerLoan->ownership}}</td>
                    <td>{{ $farmerLoan->nationality}}</td>
                    <td>{{ $farmerLoan->created_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$farmerLoan->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>



                        <form id="delete-form-{{$farmerLoan->id}}" method="POST"
                              action="{{url('/deleteFarmerLoan').'/'.$farmerLoan->id}}"
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