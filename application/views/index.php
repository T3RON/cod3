<?php include_once (APPPATH.'views/_layout/site_header.php'); ?>

<div class="row mt-2">
    <div class="col-3 mx-0">
        <img src="https://emalls.ir//files/da/fi8ocuawbko8j5yslqrxhjbqebwjm1qboy7fha7kc66c7gmhfk.gif"
            class="d-block w-100 mt-1 br">
    </div>
    <div class="col-9 mx-0">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner br">
                <div class="carousel-item active" data-interval="10000">
                    <img src="<?=base_url('')?>assets/img/1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="<?=base_url('')?>assets/img/2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?=base_url('')?>assets/img/3.jpg" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

        <div class="card mt-2">
            <div style="" class="c-product__headline--gallery ">
                فروش ویژه
                <button type="button" style="float:left;" class="btn btn-danger">مشاهده همه</button>

            </div>
            
            <div class="row">

                <div class="col-12">
                    <div class="main-carousel px-1" data-flickity='{ "lazyLoad": 2, "initialIndex": 2 }'>
                        <?php foreach($products as $products_value) { ?>
                        <a
                            href="<?= $products_value->products_url; ?>">
                            <div class="carousel-cell">
                                <div class="card card-border" style="width: 18rem;">
                                    <img class="card-img-top carousel-cell-image"
                                        data-flickity-lazyload="<?= $products_value->products_img; ?>" />
                                    <div class="card-body">
                                        <h6 class="col-12 card-title">
                                            <?= $products_value->products_title;?>
                                        </h6>
                                        <a id="price" href="#"
                                            class="col-12 btn btn-primary">
                                            
                                            <?=
                                            Scraper_helper::Scraper_price($products_value->products_code,'div[class=c-product__seller-price-real]')
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>



    </div>


</div>

<script>



</script>

<?php include_once (APPPATH.'views/_layout/site_footer.php'); ?>