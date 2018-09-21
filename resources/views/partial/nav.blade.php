<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="{{url('/')}}" class="m-brand__logo-wrapper">
                            <img alt="" src="{{url('/')}}/assets/demo/default/media/img/logo/logo_default_dark.png"/>
                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">

                        <!-- BEGIN: Left Aside Minimize Toggle -->
                        <a href="javascript:;" id="m_aside_left_minimize_toggle"
                           class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                            <span></span>
                        </a>
                        <!-- END -->

                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                           class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->

                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                           class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->

            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">


                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
                                m-dropdown-toggle="click"
                                m-dropdown-persistent="1">
                                <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                    <span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--center alert-arrow"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center"
                                             style="background: url({{url('/')}}/assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                            <span class="m-dropdown__header-title">9 New</span>
                                            <span class="m-dropdown__header-subtitle">User Notifications</span>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand"
                                                    role="tablist">
                                                    <li class="nav-item m-tabs__item">
                                                        <a class="nav-link m-tabs__link active" data-toggle="tab"
                                                           href="#topbar_notifications_notifications" role="tab">
                                                            Alerts
                                                        </a>
                                                    </li>
                                                    {{--<li class="nav-item m-tabs__item">--}}
                                                    {{--<a class="nav-link m-tabs__link" data-toggle="tab"--}}
                                                    {{--href="#topbar_notifications_events" role="tab">Events</a>--}}
                                                    {{--</li>--}}

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active"
                                                         id="topbar_notifications_notifications" role="tabpanel">
                                                        <div class="m-scrollable" data-scrollable="true"
                                                             data-height="250" data-mobile-height="200">
                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                <div class="m-list-timeline__items">
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                        <span class="m-list-timeline__text">12 new users registered</span>
                                                                        <span class="m-list-timeline__time">Just now</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">System shutdown <span
                                                                                    class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                        <span class="m-list-timeline__time">14 mins</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">New invoice received</span>
                                                                        <span class="m-list-timeline__time">20 mins</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">DB overloaded 80% <span
                                                                                    class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                                        <span class="m-list-timeline__time">1 hr</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">System error - <a
                                                                                    href="#"
                                                                                    class="m-link">Check</a></span>
                                                                        <span class="m-list-timeline__time">2 hrs</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span href="" class="m-list-timeline__text">New order received <span
                                                                                    class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                                        <span class="m-list-timeline__time">7 hrs</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">Production server down</span>
                                                                        <span class="m-list-timeline__time">3 hrs</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">Production server up</span>
                                                                        <span class="m-list-timeline__time">5 hrs</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--<div class="tab-pane" id="topbar_notifications_events"--}}
                                                    {{--role="tabpanel">--}}
                                                    {{--<div class="m-scrollable" data-scrollable="true"--}}
                                                    {{--data-height="250" data-mobile-height="200">--}}
                                                    {{--<div class="m-list-timeline m-list-timeline--skin-light">--}}
                                                    {{--<div class="m-list-timeline__items">--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">New--}}
                                                    {{--order received</a>--}}
                                                    {{--<span class="m-list-timeline__time">Just now</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">New--}}
                                                    {{--invoice received</a>--}}
                                                    {{--<span class="m-list-timeline__time">20 mins</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">Production--}}
                                                    {{--server up</a>--}}
                                                    {{--<span class="m-list-timeline__time">5 hrs</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">New--}}
                                                    {{--order received</a>--}}
                                                    {{--<span class="m-list-timeline__time">7 hrs</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">System--}}
                                                    {{--shutdown</a>--}}
                                                    {{--<span class="m-list-timeline__time">11 mins</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="m-list-timeline__item">--}}
                                                    {{--<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>--}}
                                                    {{--<a href="" class="m-list-timeline__text">Production--}}
                                                    {{--server down</a>--}}
                                                    {{--<span class="m-list-timeline__time">3 hrs</span>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width"
                                m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-text">
													<img class="m-topbar__language-selected-img"
                                                         src="{{url('/')}}/assets/app/media/img/flags/020-flag.svg">
												</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center"
                                             style="background: url({{url('/')}}/assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                            <span class="m-dropdown__header-subtitle">Select your language</span>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__item m-nav__item--active">
                                                        <a href="#" class="m-nav__link m-nav__link--active">
                                                                <span class="m-nav__link-icon"><img
                                                                            class="m-topbar__language-img"
                                                                            src="{{url('/')}}/assets/app/media/img/flags/020-flag.svg"></span>
                                                            <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">USA</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img
                                                                            class="m-topbar__language-img"
                                                                            src="{{url('/')}}/assets/app/media/img/flags/015-china.svg"></span>
                                                            <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">China</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img
                                                                            class="m-topbar__language-img"
                                                                            src="{{url('/')}}/assets/app/media/img/flags/016-spain.svg"></span>
                                                            <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Spain</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img
                                                                            class="m-topbar__language-img"
                                                                            src="{{url('/')}}/assets/app/media/img/flags/014-japan.svg"></span>
                                                            <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Japan</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="m-nav__link">
                                                                <span class="m-nav__link-icon"><img
                                                                            class="m-topbar__language-img"
                                                                            src="{{url('/')}}/assets/app/media/img/flags/017-germany.svg"></span>
                                                            <span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Germany</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{url('/')}}/assets/app/media/img/users/user4.jpg"
                                                         class="m--img-rounded m--marginless" alt=""/>
												</span>
                                    <span class="m-topbar__username m--hide">Nick</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center"
                                             style="background: url({{url('/')}}/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                            <div class="m-card-user m-card-user--skin-dark">
                                                <div class="m-card-user__pic">
                                                    <img src="{{url('/')}}/assets/app/media/img/users/user4.jpg"
                                                         class="m--img-rounded m--marginless" alt=""/>

                                                    <!--
                    <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                    -->
                                                </div>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name m--font-weight-500">{{auth()->user()->name}}</span>
                                                    <a href=""
                                                       class="m-card-user__email m--font-weight-300 m-link">{{auth()->user()->phone}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__section m--hide">
                                                        <span class="m-nav__section-text">Section</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="{{url('/profile')}}" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                            <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text"> الملف الشخصي  </span>

																			</span>
																		</span>
                                                        </a>
                                                    </li>

                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>

                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <form method="post" action="{{url('/logout')}}">

                                                            @csrf
                                                            <button type="submit"
                                                                    class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                تسجيل الخروج
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{--<li id="m_quick_sidebar_toggle" class="m-nav__item">--}}
                            {{--<a href="#" class="m-nav__link m-dropdown__toggle">--}}
                            {{--<span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
                <!-- END: Topbar -->

            </div>
        </div>
    </div>
</header>
