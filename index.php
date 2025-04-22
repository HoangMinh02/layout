<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Profix</title>
    <link
      href="assets/animate.css/animate.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/fontawesome/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800,900"
      rel="stylesheet"
    />
    <link
      href="assets/chosen/chosen.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/jquery-ui-custom/jquery-ui.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/pentix/css/pentix.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/pex-theme.min.css"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body class="body loader-loading">
    
    <?php include "header.php" ?>
    <main>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'trangChu';
            $viewFile = "views/$page.php";

            if (file_exists($viewFile)) {
                include $viewFile;
            } else {
                include "views/404.php";
            }
        ?>
    </main>
    <!-- <a href="#" class="scroll-top disabled"
      ><i class="fas fa-angle-up" aria-hidden="true"></i
    ></a>
    <div
      class="singlepage-block collapse alt-bg"
      data-block="search"
      data-show-block-class="animation-scale-top-right"
      data-hide-block-class="animation-unscale-top-right"
    >
      <a href="#" class="close-link" data-close-block
        ><i class="fas fa-times" aria-hidden="true"></i
      ></a>
      <div class="pos-v-center col-12">
        <div class="container">
          <form action="#">
            <div class="row cols-md rows-md">
              <div class="lg-col-9 md-col-8 sm-col-12">
                <div class="field-group">
                  <div class="field-wrap">
                    <input
                      class="field-control"
                      name="search"
                      placeholder="Search Tags"
                      required="required"
                    />
                    <span class="field-back"></span>
                  </div>
                </div>
              </div>
              <div class="lg-col-3 md-col-4 sm-col-6">
                <button
                  class="btn btns-white-bordered text-upper"
                  type="submit"
                >
                  search
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="loader-block">
      <div class="loader-back alt-bg"></div>
      <div class="loader-image">
        <img class="image" src="assets/images/parts/loader.gif" alt="" />
      </div>
    </div> -->
    
    <?php include "footer.php" ?>

    <script
      data-cfasync="false"
      src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/parallax.js/parallax.min.js"></script>
    <script src="assets/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/owlcarousel2/owl.carousel.min.js"></script>
    <script src="assets/shuffle/shuffle.min.js"></script>
    <script src="assets/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/chosen/chosen.jquery.min.js"></script>
    <script
      src="assets/jquery-ui-custom/jquery-ui.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/pentix/js/pentix.min.js"
      type="text/javascript"
    ></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <script
      async
      defer="defer"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBAbNXaCDOzujLCykXUvTylfbL1wUcaM&amp;callback=initMap"
    ></script>
  </body>
  <!-- Mirrored from amigos-themes.com/profix/homepage-shop-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Mar 2025 02:22:46 GMT -->
</html>
