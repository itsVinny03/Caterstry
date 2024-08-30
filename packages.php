<?php
// Include your database connection script here
$connection = mysqli_connect("localhost", "root", "", "db_admin");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
session_start();
include("header.php");
?>
  <body>
    <main>
    <!-- End Header -->
     <!-- ======= PACKAGES SECTION ======= -->
     <section id="packages" class="menu events">
        <div class="container-fluid" data-aos="fade-up">
          <div class="section-header">
            <p>Check <span>Our </span> Packages</p>
          </div>

          <ul
            class="nav nav-tabs d-flex justify-content-center"
            data-aos="fade-up"
          >
            <li class="nav-item">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#packages-packages1"
              >
                <h4>Package 1</h4>
              </a>
            </li>
            <!-- End tab nav item -->
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#packages-packages2"
              >
                <h4>Package 2</h4> </a
              ><!-- End tab nav item -->
            </li>
          </ul>

          <!-------------- PACKAGE 1 ---------------->

            <div class="tab-content" data-aos="fade-up">
              <div class="tab-pane fade active show" id="packages-packages1">
                <div class="tab-header text-center">
                <p>Packages</p>
                <h3>Package 1</h3>
                  <h5><strong>395 / PAX</strong></h5>
                  <h5><strong>PRICE:</strong> 59,250 PHP</h5>
                  <h5><strong>PAX GUARANTEED:</strong> 150</h5>
                  <h5><strong>EXCEEDING PAX:</strong> 430 PHP</h5>
                  <h5><strong>Inclusions:</strong></h5>
                    <h5><strong>Cake</strong></h5>
                    <h5><strong>Back Draft</strong></h5>
                    <h5><strong>Sound Systems</strong></h5>
                </div>

                <ul
              class="nav nav-tabs d-flex justify-content-center"
              data-aos="fade-up"
              data-aos-delay="600"
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

            <div class="tab-content" data-aos="fade-up">
              <div class="tab-pane fade active show" id="menu-beef">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Beef</h3>
                </div>

                <div class="row gy-5">

                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Beef'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Beef Brocolli.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Beef Brocolli.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Beef Broccoli</h4>
                  </div>
                

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
                  </div>
           

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Beef Golash.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Beef Golash.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Beef Goulash</h4>
                  </div> -->
              
                </div>
              </div>
              <!-- End Starter Menu Content -->

              <div class="tab-pane fade" id="menu-pork">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Pork</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Pork'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Mediterranean Pork Stew.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Mediterranean Pork Stew.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Mediterranean Pork Stew</h4>
                  </div>
            

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
                  </div>
              

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
                  </div> -->
               
                </div>
              </div>
              <!-- End Breakfast Menu Content -->

              <div class="tab-pane fade" id="menu-chicken">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Chicken</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Chicken'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
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
                  </div>
            

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
                  </div>
               

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
                  </div> -->
               
                </div>
              </div>
              <!-- End Lunch Menu Content -->

              <div class="tab-pane fade" id="menu-fish">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Fish</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Fish'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Breaded Fish fillet.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Breaded Fish fillet.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Breaded Fish Fillet</h4>
                  </div>
             

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
                  </div>
               

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
                  </div> -->
              
                </div>
              </div>
              <!-- End Dinner Menu Content -->

              <div class="tab-pane fade" id="menu-pasta">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Pasta</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Pasta'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Spaghetti Bolognese.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Spaghetti Bolognese.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Spaghetti Bolognese</h4>
                  </div>
                 

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Carbonara.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Carbonara.png"
                        class="menu-img"
                        style="width: 100.5%"
                        alt=""
                    /></a>
                    <h4>Carbonara</h4>
                  </div>
                

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Arrabbiata.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Arrabbiata.png"
                        class="menu-img"
                        style="width: 100.7%"
                        alt=""
                    /></a>
                    <h4>Arrabbiata</h4>
                  </div> -->
                
                </div>
              </div>
              <!-- End Dinner Menu Content -->

              <div class="tab-pane fade" id="menu-drinks">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Drinks</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Drinks'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Lemon Iced Tea.jpg"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Lemon Iced Tea.jpg"
                        class="menu-img img-fluid mb-4"
                        alt=""
                    /></a>
                    <h4>Lemon Iced Tea</h4>
                  </div>
               

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
                  </div>
                 

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Softdrinkss.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Softdrinkss.png"
                        class="menu-img img-fluid mb-4"
                        alt=""
                    /></a>
                    <h4>Soft Drinks</h4>
                  </div> -->
                
                </div>
              </div>
              <!-- End Dinner Menu Content -->

              <div class="tab-pane fade" id="menu-dessert">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Dessert</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Dessert'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Panna Cotta.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Panna Cotta.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Panna Cotta</h4>
                  </div>
          

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
                  </div>
                

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Buko Pandan.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Buko Pandan.png"
                        class="menu-img img-fluid mb-4"
                        alt=""
                    /></a>
                    <h4>Buko Pandan</h4>
                  </div>
                  -->
                </div>
              </div>
              <!-- End Dinner Menu Content -->

              <div class="tab-pane fade" id="menu-rice">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Rice</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Rice'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Steamed Rice.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Steamed Rice.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Steamed Rice</h4>
                  </div>
               

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Java Rice.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Java Rice.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Java Rice</h4>
                  </div>
             

                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menunbg/Yangzhou FR.png" class="glightbox"
                      ><img
                        src="assets/img/menunbg/Yangzhou FR.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Yangzhou Fried Rice</h4>
                  </div> -->
               
                </div>
              </div>
              <!-- End Dinner Menu Content -->

              <div class="tab-pane fade" id="menu-soup">
                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3>Soup</h3>
                </div>

                <div class="row gy-5">
                <?php
                  // Your SQL query for Beef category
                  $query = "SELECT food_id, name, category, image, status, description FROM tb_food WHERE category = 'Soup'";
                  $result = mysqli_query($connection, $query);

                  // Display Beef category items
                  include 'menu_display2.php'; // This file will contain the display logic
                ?>

                  <!-- <div class="col-lg-4 menu-item">
                    <a
                      href="assets/img/menunbg/Mushroom Soup.png"
                      class="glightbox"
                      ><img
                        src="assets/img/menunbg/Mushroom Soup.png"
                        class="menu-img img-fluid"
                        alt=""
                    /></a>
                    <h4>Mushroom Soup</h4>
                  </div>
               

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
                  </div>
                 

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
                  </div> -->
               
                </div>
              </div>
              <!-- End Dinner Menu Content -->
            </div>

            <!----- CHOOSE YOUR THEME ------>
          <section>
            <div class="container" data-aos="fade-up">
              <div class="section-header">
                <p>Choose your<span> Themes</span></p>
              </div>
    
              <div class="tab-content" data-aos="fade-up">
                <div class="tab-pane fade active show" id="menu-beef">
    
                  <div class="row gy-5 ">
                  <?php include 'themes_display.php'; ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/Themes/1.jpg"
                        class="glightbox"
                        ><img
                          src="assets/img/Themes/1.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 1</h4>
                    </div>
                   
    
                    <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/Themes/2.jpg"
                        class="glightbox"
                        ><img
                          src="assets/img/Themes/2.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 2</h4>
                    </div>
                   
    
                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/3.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/3.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 3</h4>
                    </div>
    
                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/7.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/7.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 4</h4>
                    </div>
    
                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/8.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/8.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 5</h4>
                    </div>
    
                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/9.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/9.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 6</h4>
                    </div>

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/10.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/10.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 7</h4>
                    </div>

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/11.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/11.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 8</h4>
                    </div>

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/Themes/13.jpg" class="glightbox"
                        ><img
                          src="assets/img/Themes/13.jpg"
                          class="menu-img img-fluid border border-secondary border-2 rounded-5"
                          alt=""
                      /></a>
                      <h4>Theme 9</h4>
                    </div> -->
                  
                  </div>
                </div>
              </div>
            </div>
          </section>


            <!---- CHOOSE YOUR VENUE ----->
              <section>
                <div class="container" data-aos="fade-up">
                  <div class="section-header">
                      <p>Choose your<span> Venue</span></p>
                    </div>
            
                    <div class="tab-content" data-aos="fade-up">
                      <div class="tab-pane fade active show">
            
                      <div class="row gy-5 ">
                      <?php include 'venue_display.php'; ?>
                      
                        <!-- <div class="col-lg-4 menu-item">
                          <a
                            href="assets/img/venue/venue1.jpg"
                            class="glightbox"
                            ><img
                              src="assets/img/venue/venue1.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 style="text-align: justify">
                              Casa Lucido | 356 Hilario Atienza Street Poblacion Barangay 7 Tanauan City Batangas 4232
                            </h6>
                        </div>
                     
            
                        <div class="col-lg-4 menu-item">
                          <a
                            href="assets/img/venue/venue2.png"
                            class="glightbox"
                          ><img
                            src="assets/img/venue/venue2.png"
                            class="menu-img img-fluid border border-secondary border-2 rounded-5"
                            alt=""
                          /></a>
                          <h6 style="text-align: justify">
                            Villa Salud Catering Services | 229 MLQ St, Taguig, Metro Manila</h6>
                        </div>
                   
            
                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue3.jpg" class="glightbox"
                            ><img
                              src="assets/img/venue/venue3.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 style="text-align: justify">
                            Mango Hills Garden Events Place | 40 Yakal, San Pedro, 4023 Laguna</h6>
                        </div>
            
                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue4.jpg" class="glightbox"
                          ><img
                            src="assets/img/venue/venue4.jpg"
                            class="menu-img img-fluid border border-secondary border-2 rounded-5"
                            alt=""
                          /></a>
                          <h6 style="text-align: justify">
                            Eloquente Catering Services | 33 Albany, Cubao, Lungsod Quezon, 1102 Kalakhang Maynila</h6>
                        </div>

                        <div class="col-lg-4 menu-item mb-3">
                          <a href="assets/img/venue/venue5.jpg" class="glightbox"
                            ><img
                              src="assets/img/venue/venue5.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 style="text-align: justify">
                            La Mariposa Tagaytay Events Place | Mendez Mendez - Tagaytay Rd, Tagaytay, Cavite</h6>
                        </div>

                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue6.png" class="glightbox"
                          ><img
                              src="assets/img/venue/venue6.png"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 style="text-align: justify">
                            Jhunlyn's Catering Services | South Road Bulacao Pardo, Cebu City, Central Visayas, Philippines, 6000</h6>
                        </div>  -->

                      </div>
                    </div>
                  </div>
                </div>
              <section>

              </div>
            </div>

         <!-------------- PACKAGE 2 ---------------->

         <div class="tab-content">
          <div class="tab-pane fade" id="packages-packages2">

            <div class="tab-header text-center">
              <p>Packages</p>
              <h3>Package 2</h3>
              <h5><strong>480 / PAX</strong></h5>
              <h5><strong>PRICE:</strong> 57,600 - 70,000 PHP</h5>
              <h5><strong>PAX GUARANTEED:</strong> 150</h5>
              <h5><strong>EXCEEDING PAX:</strong> 530 PHP</h5>
              <h5><strong>Inclusions:</strong></h5>
                    <h5><strong>Host</strong></h5>
                    <h5><strong>Cake</strong></h5>
                    <h5><strong>Photo Booth</strong></h5>
                    <h5><strong>Sound System</strong></h5>
                    <h5><strong>Back Draft</strong></h5>
            </div>
            
                <ul
                class="nav nav-tabs d-flex justify-content-center">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-beef2"
                  >
                    <h4>Beef</h4>
                  </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-pork2"
                  >
                    <h4>Pork</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-chicken2"
                  >
                    <h4>Chicken</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-fish2"
                  >
                    <h4>Fish</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-pasta2"
                  >
                    <h4>Pasta</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-drinks2"
                  >
                    <h4>Drinks</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-dessert2"
                  >
                    <h4>Dessert</h4> </a
                  ><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-rice2"
                  >
                    <h4>Rice</h4>
                  </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#menu-soup2"
                  >
                    <h4>Soup</h4>
                  </a>
                </li>
                <!-- End tab nav item -->
              </ul>

              <div class="tab-content">
                <div class="tab-pane fade active show" id="menu-beef2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Beef</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>


                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Beef'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Beef Brocolli.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Beef Brocolli.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Beef Broccoli</h4>
                    </div>
                   

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
                    </div>
                  

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Beef Golash.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Beef Golash.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Beef Goulash</h4>
                    </div> -->
               
                  </div>
                </div>
                <!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-pork2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Pork</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>


                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Pork'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Mediterranean Pork Stew.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Mediterranean Pork Stew.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Mediterranean Pork Stew</h4>
                    </div>
                  

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
                    </div>
                   

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
                    </div> -->
                 
                  </div>
                </div>
                <!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="menu-chicken2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Chicken</h3>
                  </div>

                  <div class="row gy-5">
                  
                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>


                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Chicken'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
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
                    </div>
               

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
                    </div>
                

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
                    </div> -->
                  
                  </div>
                </div>
                <!-- End Lunch Menu Content -->

                <div class="tab-pane fade" id="menu-fish2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Fish</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>


                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Fish'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Breaded Fish fillet.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Breaded Fish fillet.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Breaded Fish Fillet</h4>
                    </div>
                    

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
                    </div>
                 

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
                    </div> -->
                 
                  </div>
                </div>
                <!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="menu-pasta2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Pasta</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>

                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Pasta'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Spaghetti Bolognese.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Spaghetti Bolognese.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Spaghetti Bolognese</h4>
                    </div>
                    

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Carbonara.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Carbonara.png"
                          class="menu-img"
                          style="width: 100.5%"
                          alt=""
                      /></a>
                      <h4>Carbonara</h4>
                    </div>
                    

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Arrabbiata.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Arrabbiata.png"
                          class="menu-img"
                          style="width: 100.7%"
                          alt=""
                      /></a>
                      <h4>Arrabbiata</h4>
                    </div>
                   -->
                  </div>
                </div>
                <!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="menu-drinks2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Drinks</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>

                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Drinks'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Lemon Iced Tea.jpg"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Lemon Iced Tea.jpg"
                          class="menu-img img-fluid mb-4"
                          alt=""
                      /></a>
                      <h4>Lemon Iced Tea</h4>
                    </div>
                 

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
                    </div>
                    

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Softdrinkss.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Softdrinkss.png"
                          class="menu-img img-fluid mb-4"
                          alt=""
                      /></a>
                      <h4>Soft Drinks</h4>
                    </div> -->
                  
                  </div>
                </div>
                <!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="menu-dessert2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Dessert</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>

                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Dessert'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Panna Cotta.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Panna Cotta.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Panna Cotta</h4>
                    </div>
                   

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
                    </div>
                 

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Buko Pandan.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Buko Pandan.png"
                          class="menu-img img-fluid mb-4"
                          alt=""
                      /></a>
                      <h4>Buko Pandan</h4>
                    </div> -->
                 
                  </div>
                </div>
                <!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="menu-rice2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Rice</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>

                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Rice'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Steamed Rice.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Steamed Rice.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Steamed Rice</h4>
                    </div>
                 

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Java Rice.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Java Rice.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Java Rice</h4>
                    </div>
                  

                    <div class="col-lg-4 menu-item">
                      <a href="assets/img/menunbg/Yangzhou FR.png" class="glightbox"
                        ><img
                          src="assets/img/menunbg/Yangzhou FR.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Yangzhou Fried Rice</h4>
                    </div> -->
                   
                  </div>
                </div>
                <!-- End Dinner Menu Content -->

                <div class="tab-pane fade" id="menu-soup2">
                  <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Soup</h3>
                  </div>

                  <div class="row gy-5">

                  <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                  ?>

                  <?php
                    // Your SQL query for Beef category
                    $query = "SELECT food_id, name, category, image, status FROM tb_food WHERE category = 'Soup'";
                    $result = mysqli_query($connection, $query);

                    // Display Beef category items
                    include 'menu_display2.php'; // This file will contain the display logic
                  ?>

                    <!-- <div class="col-lg-4 menu-item">
                      <a
                        href="assets/img/menunbg/Mushroom Soup.png"
                        class="glightbox"
                        ><img
                          src="assets/img/menunbg/Mushroom Soup.png"
                          class="menu-img img-fluid"
                          alt=""
                      /></a>
                      <h4>Mushroom Soup</h4>
                    </div>
               

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
                    </div>
                  

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
                    </div> -->
               
                  </div>
                </div>
                <!-- End Dinner Menu Content -->
              </div>

              <!----- CHOOSE YOUR THEME ------>
            <section>
              <div class="container">
                <div class="section-header">
                  <p>Choose your<span> Themes</span></p>
                </div>
      
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="menu-beef">
      
                    <div class="row gy-5">

                    <?php
                      // Include your database connection script here
                      $connection = mysqli_connect("localhost", "root", "", "db_admin");

                      if (!$connection) {
                          die("Connection failed: " . mysqli_connect_error());
                      }
                    ?>

                    <?php include 'themes_display.php'?>

                      <!-- <div class="col-lg-4 menu-item">
                        <a
                          href="assets/img/Themes/1.jpg"
                          class="glightbox"
                          ><img
                            src="assets/img/Themes/1.jpg"
                            class="menu-img img-fluid border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 1</h4>
                      </div>
                  
      
                      <div class="col-lg-4 menu-item">
                        <a
                          href="assets/img/Themes/2.jpg"
                          class="glightbox"
                          ><img
                            src="assets/img/Themes/2.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 2</h4>
                      </div>
                 
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/3.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/3.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 3</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/7.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/7.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 4</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/8.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/8.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 5</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/9.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/9.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 6</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/10.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/10.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 7</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/11.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/11.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 8</h4>
                      </div>
      
                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/Themes/13.jpg" class="glightbox"
                          ><img
                            src="assets/img/Themes/13.jpg"
                            class="menu-img img-fluid  border border-secondary border-2 rounded-5"
                            alt=""
                        /></a>
                        <h4>Theme 9</h4>
                      </div>
  
                      -->
                    </div>
                  </div>
                </div>
              </div>
            </section>

               <!---- CHOOSE YOUR VENUE ----->
              <section>
               <div class="container" data-aos="fade-up">
                  <div class="section-header">
                      <p>Choose your<span> Venue</span></p>
                    </div>
            
                    <div class="tab-content" data-aos="fade-up">
                      <div class="tab-pane fade active show" id="menu-beef">
            
                      <div class="row gy-5 ">

                      <?php
                        // Include your database connection script here
                        $connection = mysqli_connect("localhost", "root", "", "db_admin");

                        if (!$connection) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                      ?>

                      <?php include 'venue_display.php'?>

                        <!-- <div class="col-lg-4 menu-item">
                          <a
                            href="assets/img/venue/venue1.jpg"
                            class="glightbox"
                            ><img
                              src="assets/img/venue/venue1.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 class="ingredients" style="text-align: justify">
                              Casa Lucido | 356 Hilario Atienza Street Poblacion Barangay 7 Tanauan City Batangas 4232
                            </h6>
                        </div>
                      
            
                        <div class="col-lg-4 menu-item">
                          <a
                            href="assets/img/venue/venue2.png"
                            class="glightbox"
                          ><img
                            src="assets/img/venue/venue2.png"
                            class="menu-img img-fluid border border-secondary border-2 rounded-5"
                            alt=""
                          /></a>
                          <h6 class="ingredients" style="text-align: justify">
                            Villa Salud Catering Services | 229 MLQ St, Taguig, Metro Manila</h6>
                        </div>
                      
            
                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue3.jpg" class="glightbox"
                            ><img
                              src="assets/img/venue/venue3.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 class="ingredients" style="text-align: justify">
                            Mango Hills Garden Events Place | 40 Yakal, San Pedro, 4023 Laguna</h6>
                        </div>
            
                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue4.jpg" class="glightbox"
                          ><img
                            src="assets/img/venue/venue4.jpg"
                            class="menu-img img-fluid border border-secondary border-2 rounded-5"
                            alt=""
                          /></a>
                          <h6 class="ingredients" style="text-align: justify">
                            Eloquente Catering Services | 33 Albany, Cubao, Lungsod Quezon, 1102 Kalakhang Maynila</h6>
                        </div>

                        <div class="col-lg-4 menu-item mb-3">
                          <a href="assets/img/venue/venue5.jpg" class="glightbox"
                            ><img
                              src="assets/img/venue/venue5.jpg"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 class="ingredients" style="text-align: justify">
                            La Mariposa Tagaytay Events Place | Mendez Mendez - Tagaytay Rd, Tagaytay, Cavite</h6>
                        </div>

                        <div class="col-lg-4 menu-item">
                          <a href="assets/img/venue/venue6.png" class="glightbox"
                          ><img
                              src="assets/img/venue/venue6.png"
                              class="menu-img img-fluid border border-secondary border-2 rounded-5"
                              alt=""
                            /></a>
                            <h6 class="ingredients" style="text-align: justify">
                            Jhunlyn's Catering Services | South Road Bulacao Pardo, Cebu City, Central Visayas, Philippines, 6000</h6>
                        </div> -->

                      </div>
                    </div>
                  </div>
                </div>
              </section>

            </div>
          </div>

        </div>
      </section>

    <!-- ======= Footer ======= -->
    <?php include("footer.php");?>
    
    </main>

    <script>
      // Function to update package content
      function updatePackageContent() {
          var packageContent = document.getElementById('packageContent');
          var rows = packageContent.getElementsByTagName('tr');

          for (var i = 0; i < rows.length; i++) {
              var row = rows[i];
              var packageId = row.querySelector('[data-package-id]').dataset.packageId;

              // Retrieve values from data attributes
              var packageName = row.querySelector('[data-package-name]').dataset.packageName;
              var paxPrice = row.querySelector('[data-package-pax-price]').dataset.packagePaxPrice;
              var paxGuaranteed = row.querySelector('[data-package-pax-guaranteed]').dataset.packagePaxGuaranteed;
              var exPax = row.querySelector('[data-package-ex-pax]').dataset.packageExPax;
              var price = row.querySelector('[data-package-price]').dataset.packagePrice;
              var inclusions = row.querySelector('[data-package-inclusions]').dataset.packageInclusions;

              // Update content in the HTML
              row.innerHTML = `
                  <td>${packageId}</td>
                  <td>${packageName}</td>
                  <td>${paxPrice}</td>
                  <td>${paxGuaranteed}</td>
                  <td>${exPax}</td>
                  <td>${price}</td>
                  <td>${inclusions}</td>
                  <td><button class='btn btn-light edit-btn' data-bs-toggle='modal' data-bs-target='#editModal${packageId}'>Edit</button></td>
              `;
          }
      }

      // Call the function when the page loads
      updatePackageContent();
    </script>

  </body>
</html>
