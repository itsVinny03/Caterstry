<?php
session_start();
include("header.php");
?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up" class="mb-3">
              Reserve Now at<br /><span>The Caters Industry</span>
            </h2>
            <p data-aos="fade-up">
              <!-- Each flavor tells a story, taste that you'll remember for
              centuries. -->
              Every flavor tells a story, taste that you'll remember in history.
            </p>
            <div class="d-flex pb-5" data-aos="fade-up">
              <a href="resform.php" class="btn-book-a-table">Reserve Now</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="assets/img/logo-logo-removebg-preview.png"
              class="img-fluid d-flex"
              alt=""
              data-aos="fade-up"
              data-aos-delay="200"
            />
          </div>

          <div class="container" data-aos="fade-up">
            <div class="gallery-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/Themes/1.jpg"
                    ><img
                      src="assets/img/Themes/1.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/Themes/2.jpg"
                    ><img
                      src="assets/img/Themes/2.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/Themes/3.jpg"
                    ><img
                      src="assets/img/Themes/3.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/Themes/4.jpg"
                    ><img
                      src="assets/img/Themes/4.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/Themes/5.jpg"
                    ><img
                      src="assets/img/Themes/5.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/menus/Spaghetti Bolognese.jpg"
                    ><img
                      src="assets/img/menus/Spaghetti Bolognese.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/menus/Breaded Fish Fillet.jpg"
                    ><img
                      src="assets/img/menus/Breaded Fish Fillet.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/menus/Chicken Cordon Blue.jpg"
                    ><img
                      src="assets/img/menus/Chicken Cordon Blue.jpg"
                      class="img-fluid rounded"
                      alt=""
                  /></a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <main>
      <!-- ===== Modal Thumbnail ===== -->
      <?php include("thumbnail.php");?>
    </main>

    <!-- ======= Footer ======= -->
    <?php include("footer.php");?>

  </body>
</html>
