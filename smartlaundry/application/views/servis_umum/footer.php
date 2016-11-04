    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Hubungi Kami
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Alamat: Jl. Arjuna No. 12</p>
              <p><i class="fa fa-globe pr-10"></i>Semarang Tengah, Semarang </p>
              <p><i class="fa fa-phone pr-10"></i>Telepon : (024) 890-8244 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">smart-laundry@gmail.com</a></p>
            </address>
          </div>
          <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
            <h1>Berita Terbaru</h1>
              
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
                Tentang Kami
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="profil.php">Profil</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="faq.html">Bantuan</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="layanan.php">Layanan</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="kontak.php">Kontak Kami</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                Smart Laundry
              </h1>
              <p>
                SMARTlaundry adalah situs web informasi laundry terpintar dan terupdate
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <div class="copyright">
                    <p style="color: #808080">Copyright 2016 &copy; SMARTlaundry.</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="<?php echo base_url();?>SML/js/jquery-1.8.3.min.js">
    </script>
    <script src="<?php echo base_url();?>SML/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>SML/js/hover-dropdown.js">
    </script>
    <script defer src="<?php echo base_url();?>SML/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>SML/assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="<?php echo base_url();?>SML/js/jquery.parallax-1.1.3.js">
    </script>
    <script src="<?php echo base_url();?>SML/js/wow.min.js">
    </script>
    <script src="<?php echo base_url();?>SML/assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="<?php echo base_url();?>SML/js/jquery.easing.min.js">
    </script>
    <script src="<?php echo base_url();?>SML/js/link-hover.js">
    </script>
    <script src="<?php echo base_url();?>SML/js/superfish.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>SML/js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="<?php echo base_url();?>SML/js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>