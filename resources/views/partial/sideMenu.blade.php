<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
            class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">


            @if(auth()->user()->type == 0)
                {{--user managment--}}
                <li class="m-menu__item m-menu__item--submenu m-menu__item--active m-menu__item--open"
                    aria-haspopup="true"
                    m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle active"><i
                                class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text"> اداره المستخدمين</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu  active"><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav ">


                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/user')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">   المستخدمين  </span>
                                </a>
                            </li>

                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/user/create')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text"> اضافه مستخدم  جديد </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif

            @if(auth()->user()->type == 1)
                {{--gallary product--}}
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{url('/galleryProduct')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                                <span class="m-menu__link-text">      معرض المنتجات </span>
                            </span>
                        </span>
                    </a>
                </li>
                {{--manage price market--}}
                <li class="m-menu__item m-menu__item--submenu m-menu__item--active m-menu__item--open"
                    aria-haspopup="true"
                    m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle active"><i
                                class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text">        اداره اسعار الاسواق</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu  active"><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav ">


                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/priceUpdate')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">     تحديث الاسعار  </span>
                                </a>
                            </li>

                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/priceUpdate/create')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text"> اضافه صنف   جديد </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif

            @if(auth()->user()->type == 2)

                {{--delar gallary product--}}
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{url('/dealerProductGallery')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                                <span class="m-menu__link-text">      معرض المنتجات </span>
                            </span>
                        </span>
                    </a>
                </li>
                {{--delar order--}}
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{url('/dealerOrder')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                                <span class="m-menu__link-text">      عمل طلبيه جديده </span>
                            </span>
                        </span>
                    </a>
                </li>
            @endif

            @if(auth()->user()->type == 3)
                {{--Farmer loan--}}
                <li class="m-menu__item " aria-haspopup="true">
                    <a href="{{url('/farmerLoan')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                                <span class="m-menu__link-text">   القرض الحسن </span>
                            </span>
                        </span>
                    </a>
                </li>
                {{--farmer product manament--}}
                <li class="m-menu__item m-menu__item--submenu m-menu__item--active m-menu__item--open"
                    aria-haspopup="true"
                    m-menu-submenu-toggle="hover">
                    <a href="javascript:;" class="m-menu__link m-menu__toggle active"><i
                                class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text"> اداره  المنتجات</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu  active"><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav ">


                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/farmerProduct')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text">    منتجاتي  </span>
                                </a>
                            </li>

                            <li class="m-menu__item " aria-haspopup="true">
                                <a href="{{url('/farmerProduct/create')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="m-menu__link-text"> اضافه منتج  جديد </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif


        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>