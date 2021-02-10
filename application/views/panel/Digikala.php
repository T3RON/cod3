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
        <h1>دیتا تیبل</h1>

        <div class="actions">
          <a href="default.htm" class="actions__item zmdi zmdi-trending-up"></a>
          <a href="default.htm" class="actions__item zmdi zmdi-check-all"></a>

    
        </div>
      </header>

      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="data-table" class="table">
              <thead>
                <tr>
                  <th>نام</th>
                  <th>یمت</th>
                  <th>اداره</th>
                  <th>سن</th>
                  <th>تاریخ شروع</th>
                  <th>حقوق</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>  <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>   <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>   <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>   <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>   <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
              <tr>
                <td>علی احمدی</td>

                <td>توسعه دهنده وب</td>
                <td>تهران</td>
                <td>53</td>
                <td>1394/10/22</td>
                <td>$114,500</td>
              </tr>
                <tr>
                  <td>علی احمدی</td>

                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td>2011/08/14</td>
                  <td>$163,000</td>
                </tr>
                <tr>
                  <td>علی احمدی</td>

                  <td>Integration Specialist</td>
                  <td>Sidney</td>
                  <td>37</td>
                  <td>2011/06/02</td>
                  <td>$95,400</td>
                </tr>
                <tr>
                  <td>علی احمدی</td>

                  <td>توسعه دهنده وب</td>
                  <td>تهران</td>
                  <td>53</td>
                  <td>1394/10/22</td>
                  <td>$114,500</td>
                </tr>
                <tr>
                  <td>علی احمدی</td>

                  <td>توسعه دهنده وب</td>
                  <td>تهران</td>
                  <td>53</td>
                  <td>1394/10/22</td>
                  <td>$114,500</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <footer class="footer hidden-xs-down">
        <p>© Super Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
          <a class="nav-link" href="default.htm">صفحه اصلی</a>

          <a class="nav-link" href="default.htm">شرکت</a>

          <a class="nav-link" href="default.htm">پشتیبانی</a>

          <a class="nav-link" href="default.htm">خبر</a>

          <a class="nav-link" href="default.htm">ارتباط با ما</a>
        </ul>
      </footer>
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