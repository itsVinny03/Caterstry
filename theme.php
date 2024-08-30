<?php
session_start();
include("header.php");
?>

    <main>
      <!-- Theme Section -->
      <section id="themes" class="menu events">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Have Fun and Enjoy <span>Our Themes</span></p>
          </div>

          <!----------------- THEMES DYNAMIC ---------------->

          <div class="container-fluid" data-aos="fade-up">
            <div
              class="slides-3 swiper"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="swiper-wrapper">
                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/1.jpg);
                    background-position: center;
                  "
                >
                  <h3>
                    Theme 1
                  </h3>
                  <div class="price align-self-start"></div>
        
                </div>
                <!-- End Event item -->

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/2.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 2</h3>
                </div>
                <!-- End Event item -->

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/3.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 3</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/7.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 4</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/8.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 5</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/9.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 6</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/10.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 7</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="
                    background-image: url(assets/img/Themes/11.jpg);
                    background-position: center;
                  "
                >
                  <h3>Theme 8</h3>
                </div>

                <div
                  class="swiper-slide event-item d-flex flex-column justify-content-end align-items-center"
                  style="background-image: url(assets/img/Themes/13.jpg)"
                >
                  <h3>Theme 9</h3>
                </div>

                <!-- End Event item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Events Section -->

      <!-- ======= Footer ======= -->
      <?php include("footer.php");?>
    
    </main>
  </body>
</html>
