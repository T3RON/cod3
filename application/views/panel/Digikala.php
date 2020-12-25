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
        <form action="<?= site_url('panel/Digikala/update') ?>" method="post" class="form-horizontal"
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
                                <input name="products_tag" type="text" class="form-control" placeholder="تگ سایت">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
          
            
                        <button type="submit" class="btn btn-warning active">ارسال محصول</button>
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
              <?php foreach($products as $products_value) { ?>
              <tr>
                <td><?= $products_value->products_code; ?></td>
                <td><?= $products_value->products_title; ?><td>
                <td><?= $products_value->products_price; ?> تومان<td>
                <td><button type="button" class="btn btn-danger">حذف</button><td>
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