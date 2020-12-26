<?php include_once (APPPATH.'views/_layout/panel_header.php'); ?>

<section class="content">
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
    <form action="<?= site_url('panel/Sub/insert') ?>" method="post" class="form-horizontal"
        enctype='multipart/form-data'>
        <div class="card">
            <div class="card-body">


                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <input name="sub_cate_title" type="text" class="form-control"
                                placeholder="عنوان زیر دسته بندی">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <select name="cate_id" class="select2">
                            <?php foreach($cate as $cate_value) { ?>
                                <option value="<?= $cate_value->cate_id; ?>"><?= $cate_value->cate_title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-warning active">ثبت</button>
                </div>
                
            </div>

            
        </div>
    </form>






</section>

<section class="content">
    <header class="content__title">
        <h1>لیست محصولات</h1>

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

    <div class="card">
        <div class="card-body">
            <h6 class="card-subtitle"></h6>

            <div class="table-responsive">
                <table id="data-table" class="table">
                    <tbody>
                        <?php foreach($sub_cate as $sub_cate_value) { ?>
                        <tr>
                            <td><?= $sub_cate_value->sub_cate_title; ?></td>
                            <td><?= $sub_cate_value->cate_id; ?></td>
                            <td>
                                <a href="<?= base_url('panel/Sub/delete'); ?>/<?= $sub_cate_value->sub_cate_id; ?>"
                                    class="btn btn-danger">حذف</a>
                                <a href="<?= base_url('panel/Sub/delete'); ?>/<?= $sub_cate_value->sub_cate_id; ?>"
                                    class="btn btn-info">ویرایش</a>
                            <td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
</main>


<?php include_once (APPPATH.'views/_layout/panel_footer.php'); ?>