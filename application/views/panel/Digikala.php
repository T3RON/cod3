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
                            <select id="cate_id" name="cate_id" class="select2">
                            <?php foreach($cate as $cate_value) { ?>
                                <option value="<?= $cate_value->cate_id; ?>"><?= $cate_value->cate_title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <select id="sub_cate_id" name="sub_cate_id" class="select2">
                            <option value="0">....</option>
                            </select>
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
                <td><a href="<?= base_url('panel/Digikala/delete'); ?>/<?= $products_value->products_id; ?>" class="btn btn-danger">حذف</button><td>
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

<script type="text/javascript">
$(document).ready(function(){
    $('#cate_id').change(function() {
        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('panel/Digikala/get_sub_cate');?>",
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].sub_cate_id + '>' + data[i]
                        .sub_cate_title + '</option>';
                }
                $('#sub_cate_id').html(html);

            }
        });
        return false;
    });

});
</script>