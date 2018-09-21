@extends('layouts.app')
@section('content')

    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    عرض منتجاتي
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{url('/farmerProduct/create')}}"
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
                <th> الاسم</th>
                <th>عدد الصناديق</th>
                <th>سعر الصندوق</th>
                <th>تاريخ الاضافه</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($farmerProducts as $key=>$farmerProduct)
                <tr>

                    <td>{{$key  + 1}}</td>
                    <td>{{ $farmerProduct->name}}</td>
                    <td>{{ $farmerProduct->numberBox}}</td>
                    <td>{{ $farmerProduct->priceBox}}</td>
                    <td>{{ $farmerProduct->created_at}}</td>

                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$farmerProduct->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>

                        <a href="{{url('/farmerProduct/'.$farmerProduct->id.'/edit')}}"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                           title="View">
                            <i class="la la-edit"></i> </a>

                        <form id="delete-form-{{$farmerProduct->id}}" method="POST"
                              action="{{url('/farmerProduct').'/'.$farmerProduct->id}}"
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