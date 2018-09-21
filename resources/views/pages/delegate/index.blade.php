@extends('layouts.app')
@section('content')

    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    اسعار المنتجات
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{url('/priceUpdate/create')}}"
                       class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>اضافه منتج جديد </span>
												</span>
                    </a>
                </li>
                <li class="m-portlet__nav-item"></li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>

                <th>#</th>
                <th> البلد</th>
                <th>المحافظه</th>
                <th>نوع الخضار</th>
                <th>السعر</th>
                <th>تاريخ اخر التحديث</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($markets as $key=>$market)
                <tr>

                    <td>{{$key  + 1}}</td>
                    <td>{{ $market->country}}</td>
                    <td>{{ $market->governorate}}</td>
                    <td>{{ $market->product}}</td>
                    <td>{{ $market->price}}</td>
                    <td>{{ $market->updated_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$market->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>

                        <a href="{{url('/priceUpdate/'.$market->id.'/edit')}}"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                           title="View">
                            <i class="la la-edit"></i> </a>

                        <form id="delete-form-{{$market->id}}" method="POST"
                              action="{{url('/priceUpdate').'/'.$market->id}}"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
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