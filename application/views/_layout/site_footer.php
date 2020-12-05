</div>
<!-- javascript -->
<script type="text/javascript" src="<?=base_url('')?>assets/js/jquery.min.js"></script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="<?=base_url('')?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?=base_url('')?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/foundation.min.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/highlight.js"></script>
<script type="text/javascript" src="<?=base_url('')?>assets/js/jquery.mousewheel.min.js"></script>

<script type="text/javascript" src="<?=base_url('')?>assets/js/flickity.pkgd.min.js"></script>




<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.
   
    $('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  groupCells: true,
  contain: true
});

});
</script>


</body>



</html>