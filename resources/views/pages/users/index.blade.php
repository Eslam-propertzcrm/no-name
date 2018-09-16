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
                    <a href="#" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
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
                <th>Order ID</th>
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
            <tr>
                <td>1</td>
                <td>61715-075</td>
                <td>علي الضيوفي</td>
                <td>السعوديه</td>
                <td>جده</td>
                <td>9876543210</td>
                <td>2/12/2018</td>
                <td>2</td>
                <td>1</td>
                <td>
                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                       title="View">
                        <i class="la la-trash-o"></i> </a>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                       title="View">
                        <i class="la la-edit"></i> </a>

                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>61715-075</td>
                <td>علي الضيوفي</td>
                <td>السعوديه</td>
                <td>جده</td>
                <td>9876543210</td>
                <td>2/12/2018</td>
                <td>1</td>
                <td>2</td>
                <td>
                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                       title="View">
                        <i class="la la-trash-o"></i> </a>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                       title="View">
                        <i class="la la-edit"></i> </a>

                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>61715-075</td>
                <td>علي الضيوفي</td>
                <td>السعوديه</td>
                <td>جده</td>
                <td>9876543210</td>
                <td>2/12/2018</td>
                <td>3</td>
                <td>3</td>
                <td>
                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                       title="View">
                        <i class="la la-trash-o"></i> </a>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                       title="View">
                        <i class="la la-edit"></i> </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>61715-075</td>
                <td>علي الضيوفي</td>
                <td>السعوديه</td>
                <td>جده</td>
                <td>9876543210</td>
                <td>2/12/2018</td>
                <td>2</td>
                <td>4</td>
                <td>
                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                       title="View">
                        <i class="la la-trash-o"></i> </a>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                       title="View">
                        <i class="la la-edit"></i> </a>

                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>61715-075</td>
                <td>علي الضيوفي</td>
                <td>السعوديه</td>
                <td>جده</td>
                <td>9876543210</td>
                <td>2/12/2018</td>
                <td>3</td>
                <td>5</td>
                <td>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only
                                    m-btn--pill"
                       title="View">
                        <i class="la la-trash-o"></i> </a>

                    <a href="#"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                       title="View">
                        <i class="la la-edit"></i> </a>

                </td>
            </tr>


            </tbody>
        </table>
    </div>
@stop