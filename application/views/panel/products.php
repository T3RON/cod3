<?php include_once (APPPATH.'views/_layout/panel_header.php'); ?>

<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>افزودن محصول</h1>

            <div class="actions">
                <a href="default.htm" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="default.htm" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="default.htm" class="dropdown-item">تازه سازی</a>
                        <a href="default.htm" class="dropdown-item">مدیریت ویجت ها</a>
                        <a href="default.htm" class="dropdown-item">تنظیمات</a>
                    </div>
                </div>
            </div>
        </header>
        <form action="<?= site_url('panel/Products/insert') ?>" method="post" class="form-horizontal"
            enctype='multipart/form-data'>
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input name="products_code" type="text" class="form-control" placeholder="کد محصول">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="وضعیت محصول">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="دسته بندی">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning active">ارسال محصول</button>
                    </div>
                </div>
            </div>
        </form>




    </div>

</section>
</main>
<!-- <div class="row">
    <div class="col-12">
        <form action="<?= site_url('panel/Products/insert') ?>" method="post" class="form-horizontal"
            enctype='multipart/form-data'>
            <div class="form-group">
                <label for="exampleFormControlInput1">p</label>
                <input name="products_code" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">s</label>
                <input name="status_id" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>

        </form>
    </div>
</div> -->

<?php include_once (APPPATH.'views/_layout/panel_footer.php'); ?>