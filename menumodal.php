<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Reservation System for Catering Services</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logo-logo-removebg-preview.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/multiform.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <main id="main">
      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Check one <span>Menu per Category</span></p>
          </div>

          <ul
            class="nav nav-tabs d-flex justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <li class="nav-item">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#menu-beef"
              >
                <h4>Beef</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-pork"
              >
                <h4>Pork</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-chicken"
              >
                <h4>Chicken</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-fish"
              >
                <h4>Fish</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-pasta"
              >
                <h4>Pasta</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-drinks"
              >
                <h4>Drinks</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-dessert"
              >
                <h4>Dessert</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-rice"
              >
                <h4>Rice</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-soup"
              >
                <h4>Soup</h4>
              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-beef">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Beef</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Beef Brocolli.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Beef Brocolli.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Beef Broccoli</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="beef-broccoli" data-category="beef"> Select 
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Beef Bulgogi.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Beef Bulgogi.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Beef Bulgogi</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="beef-bulgogi" data-category="beef"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Beef Golash.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Beef Golash.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Beef Goulash</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="beef-goulash" data-category="beef"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-pork">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Pork</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Mediterranean Pork Stew.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Mediterranean Pork Stew.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Mediterranean Pork Stew</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Mediterranean Pork Stew" data-category="pork"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Grilled Porkchop.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Grilled Porkchop.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Grilled Pork Chop</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Grilled Pork Chop" data-category="pork"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Pork Char Siu.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Pork Char Siu.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Pork Char Siu</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Pork Char Siu" data-category="pork"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-chicken">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Chicken</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Chicken Cordon Blue.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Chicken Cordon Blue.png"
                      class="menu-img"
                      style="width: 92%"
                      alt=""
                  /></a>
                  <h4>Chicken Cordon Bleu</h4>
                    <label label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Chicken Cordon Bleu" data-category="chicken"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Roasted Chicken (rbg).png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Roasted Chicken (rbg).png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Roasted Chicken</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Roasted Chicken" data-category="chicken"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Chicken Chasseur.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Chicken Chasseur.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Chicken Chasseur</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Chicken Chasseur" data-category="chicken"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Lunch Menu Content -->

            <div class="tab-pane fade" id="menu-fish">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Fish</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Breaded Fish fillet.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Breaded Fish fillet.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Breaded Fish Fillet</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Breaded Fish Fillet" data-category="fish"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/S&S Fish Fillet.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/S&S Fish Fillet.png"
                      class="menu-img"
                      style="width: 102.2%"
                      alt=""
                  /></a>
                  <h4>Sweet & Sour Fish Fillet</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Sweet & Sour Fish Fillet" data-category="fish"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Black Bean Fish Fillet.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Black Bean Fish Fillet.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Black Bean Fish Fillet</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Sweet & Sour Fish Fillet" data-category="fish"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->

            <div class="tab-pane fade" id="menu-pasta">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Pasta</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Spaghetti Bolognese.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Spaghetti Bolognese.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Spaghetti Bolognese</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Spaghetti Bolognese" data-category="pasta"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Carbonara.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Carbonara.png"
                      class="menu-img"
                      style="width: 100.5%"
                      alt=""
                  /></a>
                  <h4>Carbonara</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Carbonara" data-category="pasta"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Arrabbiata.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Arrabbiata.png"
                      class="menu-img"
                      style="width: 100.7%"
                      alt=""
                  /></a>
                  <h4>Arrabbiata</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Arrabbiata" data-category="pasta"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->

            <div class="tab-pane fade" id="menu-drinks">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Drinks</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Lemon Iced Tea.jpg"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Lemon Iced Tea.jpg"
                      class="menu-img img-fluid mb-4"
                      alt=""
                  /></a>
                  <h4>Lemon Iced Tea</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Lemon Iced Tea" data-category="drinks"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Blue Lemonade.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Blue Lemonade.png"
                      class="menu-img"
                      style="width: 104%"
                      alt=""
                  /></a>
                  <h4>Blue Lemonade</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Blue Lemonade" data-category="drinks"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Softdrinkss.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Softdrinkss.png"
                      class="menu-img img-fluid mb-4"
                      alt=""
                  /></a>
                  <h4>Soft Drinks</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Soft Drinks" data-category="drinks"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->

            <div class="tab-pane fade" id="menu-dessert">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Dessert</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Panna Cotta.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Panna Cotta.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Panna Cotta</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Panna Cotta" data-category="dessert"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Fresh Fruit Salad.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Fresh Fruit Salad.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Fresh Fruit Salad</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Fresh Fruit Salad" data-category="dessert"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Buko Pandan.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Buko Pandan.png"
                      class="menu-img img-fluid mb-4"
                      alt=""
                  /></a>
                  <h4>Buko Pandan</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"  name="menu[]" id="Buko Pandan" data-category="dessert"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->

            <div class="tab-pane fade" id="menu-rice">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Rice</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Steamed Rice.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Steamed Rice.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Steamed Rice</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Steamed Rice" data-category="rice"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Java Rice.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Java Rice.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Java Rice</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Java Rice" data-category="rice"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Yangzhou FR.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Yangzhou FR.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Yangzhou Fried Rice</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Yangzhou Fried Rice" data-category="rice"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->

            <div class="tab-pane fade" id="menu-soup">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Soup</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Mushroom Soup.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Mushroom Soup.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Mushroom Soup</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Mushroom Soup" data-category="soup"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Corn Chowder.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Corn Chowder.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Corn Chowder</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Corn Chowder" data-category="soup"> Select
                    </label>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a
                    href="assets/img/menunbg/Pumpkin Soup.png"
                    class="glightbox"
                    ><img
                      src="assets/img/menunbg/Pumpkin Soup.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Pumpkin Soup</h4>
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="menu[]" id="Pumpkin Soup" data-category="soup"> Select
                    </label>
                </div>
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Dinner Menu Content -->
          </div>
        </div>
      </section>
    </main>

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

     <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!---- Multi-Step- Form ------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/multiform.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get all checkboxes
            var checkboxes = document.querySelectorAll('.form-check-input');

            // Add event listener to each checkbox
            checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                // Reset other checkboxes in the same category
                if (this.checked) {
                var category = this.getAttribute('data-category');
                checkboxes.forEach(function (otherCheckbox) {
                    if (otherCheckbox !== checkbox && otherCheckbox.getAttribute('data-category') === category) {
                    otherCheckbox.checked = false;
                    }
                });
                }
            });
            });
        });
    
        // Restore the selected items when switching categories
        var categoryTabs = document.querySelectorAll('.nav-link');
        categoryTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var category = this.getAttribute('data-bs-target').substring(1); // Remove the # prefix
            var selectedItemId = selectedItems[category];

            // Check the corresponding checkbox if it was selected before
            checkboxes.forEach(function (checkbox) {
            checkbox.checked = checkbox.id === selectedItemId;
            });
        });
        });


      function showSelectedItems() {
        // Get all checkboxes that are checked
        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        
        // Extract the menu item ids and categories
        var selectedItems = [];
        checkboxes.forEach(function (checkbox) {
            selectedItems.push({
                id: checkbox.id,
                category: checkbox.getAttribute('data-category')
            });
        });

        // Send the selected items to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'forms/record_selected_items.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the server's response, if needed
                var response = JSON.parse(xhr.responseText);
                console.log(response);
            }
        };

        // Convert the selected items array to JSON and send it to the server
        var selectedItemsJson = JSON.stringify(selectedItems);
        xhr.send(selectedItemsJson);
      }

    </script>

  </body>
</html>

