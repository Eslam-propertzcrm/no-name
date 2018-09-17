@extends('layouts.app')
@section('content')

    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    اداره المستخدمين
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="{{url('/user/create')}}" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>اضافه مستخدم  جديد </span>
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
                <th>Record ID</th>
                <th>#</th>
                <th> الاسم</th>
                <th>البلد</th>
                <th>المحافظه</th>
                <th>رقم الجوال</th>
                <th>تاريخ الاشتراك</th>
                <th>الرتبه</th>
                <th>حاله الحساب</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $key=>$user)
                <tr>
                    <td>1</td>
                    <td>{{$key  + 1}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->country}}</td>
                    <td>{{ $user->governorate}}</td>
                    <td>{{ $user->phone}}</td>
                    <td>{{ $user->created_at}}</td>
                    <td>{{ $user->type}}</td>
                    <td>2</td>
                    <td>
                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{$user->id}}').submit();"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                           title="View">
                            <i class="la la-trash-o"></i> </a>

                        <a href="{{url('/user/'.$user->id.'/edit')}}"
                           class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                           title="View">
                            <i class="la la-edit"></i> </a>

                        <form id="delete-form-{{$user->id}}" method="POST"
                              action="{{url('/user').'/'.$user->id}}"
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