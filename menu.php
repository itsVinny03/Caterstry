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
    <main id="main">
      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Check Our <span>Menu</span></p>
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
      

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-soup"
              >
                <h4>Soup</h4>
              </a>
            </li>
       
          </ul>

          

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <h4>Beef Brocolli</h4>
                  <p class="ingredients" style="text-align: justify">
                    Beef broccoli is a Chinese-American stir-fry with beef and
                    broccoli in a savory sauce.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Beef bulgogi is a sweet and savory Korean grilled beef dish.
                  </p>
                </div>
           

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Beef Golash.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Beef Golash.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Beef Goulash</h4>
                  <p class="ingredients" style="text-align: justify">
                    Beef goulash is a Hungarian stew with beef and paprika.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Mediterranean pork stew is a slow-cooked dish with pork,
                    tomatoes, and Mediterranean herbs and spices.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Grilled pork chop is a simple dish of pork cooked on the
                    grill, often seasoned with herbs and spices.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Pork char siu is a Chinese barbecue dish with sweet and
                    savory glazed pork.
                  </p>
                </div>
                -->
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Chicken Cordon Bleu is a classic dish featuring chicken
                    breasts stuffed with ham and cheese, then breaded and baked
                    or fried.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Roasted chicken is a flavorful dish of chicken cooked in the
                    oven until it's golden brown and tender.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Chicken Chasseur is a French chicken dish cooked with
                    mushrooms, tomatoes, and white wine for a savory sauce.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Breaded fish fillet is fish coated in breadcrumbs and fried
                    until crispy and golden brown.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Sweet and sour fish fillet is a dish featuring fried fish
                    served with a tangy and sweet sauce.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Black Bean Fish fillet in black bean sauce is a Chinese dish with fish
                    served in a flavorful and savory black bean-based sauce.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
              ?>
<!-- 
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
                  <p class="ingredients" style="text-align: justify">
                    Spaghetti Bolognese is an Italian pasta dish with a meaty
                    tomato sauce served over spaghetti.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Carbonara is an Italian pasta dish made with eggs, cheese,
                    pancetta or bacon, and black pepper.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Arrabbiata is an Italian pasta sauce known for its spicy
                    tomato and chili pepper flavor.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Lemon iced tea is a refreshing beverage made by combining
                    tea with lemon juice and sweetener, served over ice.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Blue lemonade is a colorful and fruity drink made with lemon
                    juice and blue food coloring.
                  </p>
                </div>
              

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Softdrinkss.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Softdrinkss.png"
                      class="menu-img img-fluid mb-4"
                      alt=""
                  /></a>
                  <h4>Soft Drinks</h4>
                  <p class="ingredients" style="text-align: justify">
                    Soft drinks are carbonated beverages typically flavored with
                    sweeteners and available in various flavors.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
              ?>
                <!-- <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Panna Cotta.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Panna Cotta.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Panna Cotta</h4>
                  <p class="ingredients" style="text-align: justify">
                    Panna cotta is an Italian dessert with a creamy,
                    custard-like texture.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Fresh fruit salad is a mixture of assorted fresh fruits
                    often served with a dressing.
                  </p>
                </div>
               

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Buko Pandan.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Buko Pandan.png"
                      class="menu-img img-fluid mb-4"
                      alt=""
                  /></a>
                  <h4>Buko Pandan</h4>
                  <p class="ingredients" style="text-align: justify">
                    Buko pandan is a Filipino dessert made with coconut and
                    pandan-flavored gelatin.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Steamed rice is plain, cooked rice without additional
                    flavorings.
                  </p>
                </div>
              

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Java Rice.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Java Rice.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Java Rice</h4>
                  <p class="ingredients" style="text-align: justify">
                    Java rice is a Filipino dish of garlic and annatto-flavored
                    rice.
                  </p>
                </div>
             

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menunbg/Yangzhou FR.png" class="glightbox"
                    ><img
                      src="assets/img/menunbg/Yangzhou FR.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Yangzhou Fried Rice</h4>
                  <p class="ingredients" style="text-align: justify">
                    Yangzhou fried rice is a Chinese dish with fried rice,
                    typically containing vegetables, meat, and eggs.
                  </p>
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
                include 'menu_display.php'; // This file will contain the display logic
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
                  <p class="ingredients" style="text-align: justify">
                    Mushroom soup is a creamy soup made with mushrooms.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Corn chowder is a thick soup with corn and often potatoes.
                  </p>
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
                  <p class="ingredients" style="text-align: justify">
                    Pumpkin soup is a creamy soup made from pumpkin puree and
                    spices.
                  </p>
                </div> -->
             
              </div>
            </div>
            <!-- End Dinner Menu Content -->
          </div>
        </div>
      </section>
    </main>

    <!-- ======= Footer ======= -->
    <?php include("footer.php");?>
    
  </body>
</html>


