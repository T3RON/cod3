<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?=base_url('')?>assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?=base_url('')?>assets/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?=base_url('')?>assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="<?=base_url('')?>assets/css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="index.html">تورهیل</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="متن جستجوی خود را وارد نمایید">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="default.htm" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="default.htm" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
پیام ها

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a href="default.htm" class="listview__item">
                                    <img src="<?=base_url('')?>assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            علی احمدی <small>12:01 بعد از ظهر</small>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <img src="<?=base_url('')?>assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            رضا حسینی
                                            <small>02:45 بعد ازظهر</small>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <img src="<?=base_url('')?>assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            محمد محمدی
                                            <small>08:21 بعد ازظهر</small>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <img src="<?=base_url('')?>assets/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            محمد محمدی
                                            <small>08:43 بعد ازظهر</small>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <img src="<?=base_url('')?>assets/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            محمد محمدی
                                            <small>11:32 بعد ازظهر</small>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    </div>
                                </a>

                                <a href="default.htm" class="view-more">مشاهده تمام پیام ها</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="default.htm" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
 نوتیفیکیشن

                                <div class="actions">
                                    <a href="default.htm" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <div class="listview__scroll scrollbar-inner">
                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">دارا رضوی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">رضا حسینی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">محمد محمدی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">محمد محمدی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">محمد محمدی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">دارا رضوی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">رضا حسینی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                        </div>
                                    </a>

                                    <a href="default.htm" class="listview__item">
                                        <img src="<?=base_url('')?>assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">محمد محمدی</div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">وظایف</div>

                            <div class="listview listview--hover">
                                <a href="default.htm" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">گزارش بررسی خطاهای سایت</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">اکستنشن های گوگل کروم</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">پروژه های شبکه های اجتماعی</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">ادمین بوت استرپ </div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="default.htm" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">اپلیکیشن یوتیوب</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="default.htm" class="view-more">مشاهده تمام وظایف</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">تقویم</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">فایل ها</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">ایمیل</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">گزارش ها</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">خبر</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="default.htm">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">گالری</small>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="default.htm" class="dropdown-item" data-sa-action="fullscreen">تمام صفحه</a>
                            <a href="default.htm" class="dropdown-item">پاک کردن حافظه لوکال</a>
                            <a href="default.htm" class="dropdown-item">تنظیمات</a>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="default.htm" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="<?=base_url('')?>assets/demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">رضا حسینی</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="default.htm">مشاهده پروفایل</a>
                            <a class="dropdown-item" href="default.htm">تنظیمات</a>
                            <a class="dropdown-item" href="default.htm">خروج</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="index.html"><i class="zmdi zmdi-home"></i> داشبرد</a></li>

                        <li class="@@variantsactive">
                            <a href="<?= base_url('panel/Digikala/index'); ?>"><i class="zmdi zmdi-view-week"></i> افزودن محصول</a>

                            
                        </li>

                        <li class="@@typeactive"><a href="<?= base_url('panel/Refresh/update'); ?>"><i class="zmdi zmdi-format-underlined"></i> بروز رسانی قیمت</a></li>

                        <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> ویجت ها</a></li>

                        <li class="navigation__sub @@tableactive">
                            <a href="default.htm"><i class="zmdi zmdi-view-list"></i> جداول</a>

                            <ul>
                                <li class="@@normaltableactive"><a href="html-table.html">HTML Table</a></li>
                                <li class="@@datatableactive"><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="default.htm"><i class="zmdi zmdi-collection-text"></i> فرم ها</a>

                            <ul>
                                <li class="navigation__active"><a href="form-elements.html">فرم پایه</a></li>
                                <li class="@@formcomponentactive"><a href="form-components.html">کامپوننت های فرم</a></li>
                                <li class="@@formvalidationactive"><a href="form-validation.html">اعتبار سنجی فرم</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@uiactive">
                            <a href="default.htm"><i class="zmdi zmdi-swap-alt"></i> رابط کاربری</a>

                            <ul>
                                <li class="@@colorsactive"><a href="colors.html">رنگ ها</a></li>
                                <li class="@@cssanimationsactive"><a href="css-animations.html">انیمیشن های سی اس اس</a></li>
                                <li class="@@buttonsactive"><a href="buttons.html">دکمه ها</a></li>
                                <li class="@@iconsactive"><a href="icons.html">آیکن ها</a></li>
                                <li class="@@listviewactive"><a href="listview.html">لیست ویو</a></li>
                                <li class="@@toolbarsactive"><a href="toolbars.html">تولبار</a></li>
                                <li class="@@cardsactive"><a href="cards.html">کاردها</a></li>
                                <li class="@@alertactive"><a href="alerts.html">هشدارها</a></li>
                                <li class="@@badgesactive"><a href="badges.html">بجت ها</a></li>
                                
                                <li class="@@jumbotronactive"><a href="jumbotron.html">Jumbotron</a></li>
                                <li class="@@navsactive"><a href="navs.html">Navs</a></li>
                                <li class="@@paginationactive"><a href="pagination.html">صفحه بندی</a></li>
                                <li class="@@progressactive"><a href="progress.html">پراگرس بار</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub @@componentsactive">
                            <a href="default.htm"><i class="zmdi zmdi-group-work"></i> کامپوننت های جاوا اسکریپتی</a>

                            <ul class="navigation__sub">
                                <li class="@@carouselactive"><a href="carousel.html">اسلایدر</a></li>
                                <li class="@@collapseactive"><a href="collapse.html">کلپس</a></li>
                                <li class="@@dropdownsactive"><a href="dropdowns.html">دراپ دان</a></li>
                                <li class="@@modalsactive"><a href="modals.html">مدال</a></li>
                                <li class="@@popoveractive"><a href="popover.html">پاپ آور</a></li>
                                <li class="@@tabsactive"><a href="tabs.html">تب</a></li>
                                <li class="@@tooltipsactive"><a href="tooltips.html">تولتیپ</a></li>
                                <li class="@@notificationsactive"><a href="notifications-alerts.html">نوتیفیکیشن و آلرت</a></li>
                                
                            </ul>
                        </li>

                        <li class="navigation__sub @@chartsactive">
                            <a href="default.htm"><i class="zmdi zmdi-trending-up"></i> نمودار</a>

                            <ul>
                                <li class="@@flotchartsactive"><a href="flot-charts.html">Flot</a></li>
                                <li class="@@otherchartsactive"><a href="other-charts.html">نمودار دیگر</a></li>
                            </ul>
                        </li>

                        <li class="@@calendaractive"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> تقویم</a></li>

                        <li class="@@photogalleryactive"><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> گالری تصاویر</a></li>

                        <li class="navigation__sub @@samplepagesactive">
                            <a href="default.htm"><i class="zmdi zmdi-collection-item"></i> صفحات نمونه</a>

                            <ul>
                                <li class="@@profileactive"><a href="profile-about.html">پروفایل</a></li>
                                <li class="@@messagesactive"><a href="messages.html">پیام ها</a></li>
                                <li class="@@contactsactive"><a href="contacts.html">ارتباط با ما</a></li>
                                <li class="@@newcontactsactive"><a href="new-contact.html">مخاطب جدید</a></li>
                                <li class="@@groupsactive"><a href="groups.html">گروه ها</a></li>
                                <li class="@@pricingtablesactive"><a href="pricing-tables.html">جداول قیمت</a></li>
                                <li class="@@invoiceactive"><a href="invoice.html">فاکتور</a></li>
                                <li class="@@todoactive"><a href="todo-lists.html">لیست وضایف</a></li>
                                <li class="@@notesactive"><a href="notes.html">یادداشت ها</a></li>
                                <li class="@@searchresultsactive"><a href="search-results.html">نتیجه جستجو</a></li>
                                <li class="@@issuesactive"><a href="issue-tracker.html">پیگیری خطاها</a></li>
                                <li class="@@faqactive"><a href="faq.html">سوالات متداول</a></li>
                                <li class="@@teamactive"><a href="team.html">تیم</a></li>
                                <li class="@@blogactive"><a href="blog.html">بلاگ</a></li>
                                <li class="@@blogdetailactive"><a href="blog-detail.html">جزییات بلاگ</a></li>
                                <li class="@@qaactive"><a href="questions-answers.html">پرسش و پاسخ</a></li>
                                <li class="@@qadetailactive"><a href="questions-answers-details.html">جزییات پرسش و پاسخ</a></li>
                                <li class="@@loginactive"><a href="login.html">ورود و ثبت نام</a></li>
                                <li class="@@lockscreenactive"><a href="lockscreen.html">لاک اسکرین</a></li>
                                <li class="@@lockscreenactive"><a href="404.html">404</a></li>
                                <li class="@@emptyactive"><a href="empty.html">صفحه خالی</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="default.htm" class="themes__item active" data-sa-value="1"><img src="<?=base_url('')?>assets/img/bg/1.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="2"><img src="<?=base_url('')?>assets/img/bg/2.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="3"><img src="<?=base_url('')?>assets/img/bg/3.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="4"><img src="<?=base_url('')?>assets/img/bg/4.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="5"><img src="<?=base_url('')?>assets/img/bg/5.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="6"><img src="<?=base_url('')?>assets/img/bg/6.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="7"><img src="<?=base_url('')?>assets/img/bg/7.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="8"><img src="<?=base_url('')?>assets/img/bg/8.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="9"><img src="<?=base_url('')?>assets/img/bg/9.jpg" alt=""></a>
        <a href="default.htm" class="themes__item" data-sa-value="10"><img src="<?=base_url('')?>assets/img/bg/10.jpg" alt=""></a>
    </div>
</div>
