<?php include("header.php")?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you're using POST to submit the form
    $pax = $_POST["pax"];
    
    // Ensure $pax is a numeric value
    if (is_numeric($pax)) {
        // Extract the first three digits
        $pax = substr($pax, 0, 3);
        
        // Now $pax contains at most three digits
        
        // Your MySQL database connection code goes here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_admin";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO tb_pending (pax) VALUES ('$pax')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Invalid input for pax";
    }
}
?>


<body>
<main id="main">

<div class="section-header">
    <p> Reservation<span> Form</span></p>
</div>

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-8 col-md-offset-3">
        <form id="msform">

            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Menu</li>
                <li>Theme & Venue</li>
                <li>Time of Service</li>
            </ul>

            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="name" required placeholder="Enter your name" maxlength="26" pattern="[^.]*"   onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode === 46 || event.charCode === 32"/>
                <input type="text" name="address" maxlength="70" required placeholder="Enter you address"/>
                <input type="text" name="phone" required placeholder="Enter your phone Number" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Menu</h2>
                <h3 class="fs-subtitle">Choose one per category</h3>

                    <div class="mb-3">
                      
                        <h6>Soup:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Corn Chowder" name="menu[]" value="Corn Chowder" class="form-check-input" data-category="soup" />
                                <label for="Corn Chowder">
                                    Corn Chowder
                                    <a href="assets/img/menunbg/Corn Chowder.png" class="glightbox"><img src="assets/img/menunbg/Corn Chowder.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Mushroom Soup" name="menu[]" value="Mushroom Soup" class="form-check-input" data-category="soup"/>
                                <label for="Mushroom Soup">
                                    Mushroom Soup
                                    <a href="assets/img/menunbg/Mushroom Soup.png" class="glightbox"><img src="assets/img/menunbg/Mushroom Soup.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Pumpkin Soup" name="menu[]" value="Pumpkin Soup" class="form-check-input" data-category="soup"/>
                                <label for="Pumpkin Soup">
                                    Pumpkin Soup
                                    <a href="assets/img/menunbg/Pumpkin Soup.png" class="glightbox"><img src="assets/img/menunbg/Pumpkin Soup.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                        <h6>Rice:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Java Rice" name="menu[]" value="Java Rice" class="form-check-input" data-category="rice" />
                                <label for="Java Rice">
                                    Java Rice
                                    <a href="assets/img/menunbg/Java Rice.png" class="glightbox"><img src="assets/img/menunbg/Java Rice.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Steamed Rice" name="menu[]" value="Steamed Rice" class="form-check-input" data-category="rice" />
                                <label for="Steamed Rice">
                                    Steamed Rice
                                    <a href="assets/img/menunbg/Steamed Rice.png" class="glightbox"><img src="assets/img/menunbg/Steamed Rice.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Yangzhou Fried Rice" name="menu[]" value="Yangzhou Fried Rice" class="form-check-input" data-category="rice" />
                                <label for="Yangzhou Fried Rice">
                                    Yangzhou FR
                                    <a href="assets/img/menunbg/Yangzhou FR.png" class="glightbox"><img src="assets/img/menunbg/Yangzhou FR.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                        <h6>Pasta:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Arrabbiata" name="menu[]" value="Arrabbiata" class="form-check-input" data-category="pasta"/>
                                <label for="Arrabbiata">
                                    Arrabbiata
                                    <a href="assets/img/menunbg/Arrabbiata.png" class="glightbox"><img src="assets/img/menunbg/Arrabbiata.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Carbonara" name="menu[]" value="Carbonara" class="form-check-input" data-category="pasta" />
                                <label for="Carbonara">
                                    Carbonara
                                    <a href="assets/img/menunbg/Carbonara.png" class="glightbox"><img src="assets/img/menunbg/Carbonara.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Spaghetti Bolognese" name="menu[]" value="Spaghetti Bolognese" class="form-check-input" data-category="pasta" />
                                <label for="Spaghetti Bolognese">
                                    Spaghetti Bolognese
                                    <a href="assets/img/menunbg/Spaghetti Bolognese.png" class="glightbox"><img src="assets/img/menunbg/Spaghetti Bolognese.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                        <h6>Fish:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Breaded Fish Fillet" name="menu[]" value="Breaded Fish Fillet" class="form-check-input" data-category="fish" />
                                <label for="Breaded Fish Fillet">
                                    Breaded Fish Fillet
                                    <a href="assets/img/menunbg/Breaded Fish fillet.png" class="glightbox"><img src="assets/img/menunbg/Breaded Fish Fillet.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Black Bean Fish Fillet" name="menu[]" value="S&S Fish Fillet" class="form-check-input" data-category="fish" />
                                <label for="Black Bean Fish Fillet">
                                    Black Bean Fish Fillet
                                    <a href="assets/img/menunbg/S&S Fish Fillet.png" class="glightbox"><img src="assets/img/menunbg/S&S Fish Fillet.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="S&S Fish Fillet" name="menu[]" value="Pork Char Siu" class="form-check-input" data-category="fish" />
                                <label for="S&S Fish Fillet">
                                    S&S Fish Fillet
                                    <a href="assets/img/menunbg/Black Bean Fish Fillet.png" class="glightbox"><img src="assets/img/menunbg/Black Bean Fish Fillet.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>

                        <h6>Chicken:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Chicken Chasseur" name="menu[]" value="Chicken Chasseur" class="form-check-input" data-category="chicken"/>
                                <label for="Chicken Chasseur">
                                    Chicken Chasseur
                                    <a href="assets/img/menunbg/Chicken Chasseur.png" class="glightbox"><img src="assets/img/menunbg/Chicken Chasseur.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Chicken Cordon Blue" name="menu[]" value="Chicken Cordon Blue" class="form-check-input" data-category="chicken" />
                                <label for="Chicken Cordon Blue">
                                    Chicken Cordon Blue
                                    <a href="assets/img/menunbg/Chicken Cordon Blue.png" class="glightbox"><img src="assets/img/menunbg/Chicken Cordon Blue.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Roasted Chicken" name="menu[]" value="Roasted Chicken" class="form-check-input" data-category="chicken" />
                                <label for="Roasted Chicken">
                                    Roasted Chicken
                                    <a href="assets/img/menunbg/Roasted Chicken (rbg).png" class="glightbox"><img src="assets/img/menunbg/Roasted Chicken (rbg).png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                        
                        <h6>Pork:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Grilled Pork Chop" name="menu[]" value="Grilled Pork Chop" class="form-check-input" data-category="pork" />
                                <label for="Grilled Pork Chop">
                                    Grilled Pork Chop
                                    <a href="assets/img/menunbg/Grilled Porkchop.png" class="glightbox"> <img src="assets/img/menunbg/Grilled Porkchop.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Mediterranean Pork Stew" name="menu[]" value="Mediterranean Pork Stew" class="form-check-input" data-category="pork"/>
                                <label for="Mediterranean Pork Stew">
                                    Mediterranean Pork Stew
                                    <a href="assets/img/menunbg/Mediterranean Pork Stew.png" class="glightbox"><img src="assets/img/menunbg/Mediterranean Pork Stew.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Pork Char Siu" name="menu[]" value="Pork Char Siu" class="form-check-input" data-category="pork" />
                                <label for="Pork Char Siu">
                                    Pork Char Siu
                                    <a href="assets/img/menunbg/Pork Char Siu.png" class="glightbox"><img src="assets/img/menunbg/Pork Char Siu.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>

                        <h6>Beef:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Beef Brocolli" name="menu[]" value="Beef Brocolli" class="form-check-input" data-category="beef"/>
                                <label for="Beef Brocolli">
                                    Beef Brocolli
                                    <a href="assets/img/menunbg/Beef Brocolli.png" class="glightbox"><img src="assets/img/menunbg/Beef Brocolli.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Beef Bulgogi" name="menu[]" value="Beef Bulgogi" class="form-check-input" data-category="beef"/>
                                <label for="Beef Bulgogi">
                                    Beef Bulgogi
                                    <a href="assets/img/menunbg/Beef Bulgogi.png" class="glightbox"><img src="assets/img/menunbg/Beef Bulgogi.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Beef Goulash" name="menu[]" value="Beef Goulash" class="form-check-input" data-category="beef"/>
                                <label for="Beef Goulash">
                                    Beef Goulash
                                    <a href="assets/img/menunbg/Beef Golash.png" class="glightbox"><img src="assets/img/menunbg/Beef Golash.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>

                        <h6>Dessert:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Buko Pandan" name="menu[]" value="Buko Pandan" class="form-check-input" data-category="dessert"/>
                                <label for="Buko Pandan">
                                    Buko Pandan
                                    <a href="assets/img/menunbg/Buko Pandan.png" class="glightbox"><img src="assets/img/menunbg/Buko Pandan.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Fresh Fruit Salad" name="menu[]" value="Fresh Fruit Salad" class="form-check-input" data-category="dessert"/>
                                <label for="Fresh Fruit Salad">
                                    Fresh Fruit Salad
                                    <a href="assets/img/menunbg/Fresh Fruit Salad.png" class="glightbox"><img src="assets/img/menunbg/Fresh Fruit Salad.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Panna Cotta" name="menu[]" value="Panna Cotta" class="form-check-input" data-category="dessert"/>
                                <label for="Panna Cotta">
                                    Panna Cotta
                                    <a href="assets/img/menunbg/Panna Cotta.jpeg" class="glightbox"><img src="assets/img/menunbg/Panna Cotta.jpeg" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>

                        <h6>Drinks:</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Blue Lemonade" name="menu[]" value="Blue Lemonade" class="form-check-input" data-category="drinks"/>
                                <label for="Blue Lemonade">
                                    Blue Lemonade
                                    <a href="assets/img/menunbg/Blue Lemonade.png" class="glightbox"><img src="assets/img/menunbg/Blue Lemonade.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Lemon Iced Tea" name="menu[]" value="Lemon Iced Tea" class="form-check-input" data-category="drinks"/>
                                <label for="Lemon Iced Tea">
                                    Lemon Iced Tea
                                    <a href="assets/img/menunbg/Lemon Iced Tea.jpg" class="glightbox"><img src="assets/img/menunbg/Lemon Iced Tea.jpg" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Softdrinks" name="menu[]" value="Softdrinks" class="form-check-input" data-category="drinks"/>
                                <label for="Softdrinks">
                                    Softdrinks
                                    <a href="assets/img/menunbg/Softdrinkss.png" class="glightbox"><img src="assets/img/menunbg/Softdrinkss.png" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>

                    </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <!-- Theme&Venue -->

            <fieldset>
                <h2 class="fs-title">Theme</h2>
                <h3 class="fs-subtitle">Choose one per category</h3>

                    <div class="mb-3">
                      
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-1" name="themes[]" value="Theme 1" class="form-check-input" data-category="theme"/>
                                <label for="Theme-1">
                                    Theme 1
                                    <a href="assets/img/Themes/1.jpg" class="glightbox"><img src="assets/img/Themes/1.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-2" name="themes[]" value="Theme 2" class="form-check-input" data-category="theme"/>
                                <label for="Theme-2">
                                    Theme 2
                                    <a href="assets/img/Themes/2.jpg" class="glightbox"><img src="assets/img/Themes/2.jpg" class="rounded" alt="Mushroom Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-3" name="themes[]" value="Theme 3" class="form-check-input" data-category="theme"/>
                                <label for="Theme-3">
                                    Theme 3
                                    <a href="assets/img/Themes/3.jpg" class="glightbox"><img src="assets/img/Themes/3.jpg" class="rounded" alt="Pumpkin Soup Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                      
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-4" name="themes[]" value="Theme 4" class="form-check-input" data-category="theme"/>
                                <label for="Theme-4">
                                    Theme 4
                                    <a href="assets/img/Themes/7.jpg" class="glightbox"><img src="assets/img/Themes/7.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-5" name="themes[]" value="Theme 5" class="form-check-input" data-category="theme"/>
                                <label for="Theme-5">
                                    Theme 5
                                    <a href="assets/img/Themes/8.jpg" class="glightbox"><img src="assets/img/Themes/8.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-6" name="themes[]" value="Theme 6" class="form-check-input" data-category="theme"/>
                                <label for="Theme-6">
                                    Theme 6
                                    <a href="assets/img/Themes/9.jpg" class="glightbox"><img src="assets/img/Themes/9.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                     
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-7" name="themes[]" value="Theme 7" class="form-check-input" data-category="theme"/>
                                <label for="Theme-7">
                                    Theme 7
                                    <a href="assets/img/Themes/10.jpg" class="glightbox"><img src="assets/img/Themes/10.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-8" name="themes[]" value="Theme 8" class="form-check-input" data-category="theme"/>
                                <label for="Theme-8">
                                    Theme 8
                                    <a href="assets/img/Themes/11.jpg" class="glightbox"><img src="assets/img/Themes/11.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Theme-9" name="themes[]" value="Theme 9" class="form-check-input" data-category="theme"/>
                                <label for="Theme-9">
                                    Theme 9
                                    <a href="assets/img/Themes/13.jpg" class="glightbox"><img src="assets/img/Themes/13.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                       
                        <!-- Venue --> 

                        <h2 class="fs-title">Venue</h2>
                            <h3 class="fs-subtitle">Choose one per category</h3>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Casa Lucido" name="venue[]" value="Casa Lucido" class="form-check-input" data-category="venue"/>
                                <label for="Casa Lucido">
                                    Casa Lucido
                                    <a href="assets/img/venue/venue1.jpg" class="glightbox"><img src="assets/img/venue/venue1.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Villa Salud" name="venue[]" value="Villa Salud"  class="form-check-input" data-category="venue"/>
                                <label for="Villa Salud">
                                    Villa Salud
                                    <a href="assets/img/venue/venue2.png" class="glightbox"><img src="assets/img/venue/venue2.png" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="Mango Hills" name="venue[]" value="Mango Hills"  class="form-check-input" data-category="venue"/>
                                <label for="Mango Hills">
                                    Mango Hills
                                    <a href="assets/img/venue/venue3.jpg" class="glightbox"><img src="assets/img/venue/venue3.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                        <br>
                      
                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" id="Eloquente" name="venue[]" value="Eloquente"  class="form-check-input" data-category="venue"/>
                                <label for="Eloquente">
                                    Eloquente
                                    <a href="assets/img/venue/venue4.jpg" class="glightbox img-fluid"><img src="assets/img/venue/venue4.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="La Mariposa" name="venue[]" value="La Mariposa"  class="form-check-input" data-category="venue"/>
                                <label for="La Mariposa">
                                    La Mariposa
                                    <a href="assets/img/venue/venue5.jpg" class="glightbox"><img src="assets/img/venue/venue5.jpg" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="South Road" name="venue[]" value="South Road"  class="form-check-input" data-category="venue"/>
                                <label for="South Road">
                                    South Road
                                    <a href="assets/img/venue/venue6.png" class="glightbox"><img src="assets/img/venue/venue6.png" class="rounded" alt="Corn Chowder Image" width="50" height="50" /></a>
                                </label>
                            </div>
                        </div>
                    </div>

                <input type="number" name="pax" id="paxInput" required placeholder="Enter the No. of People" min="1" oninput="limitInput(this, 3) "  min="1"
                oninput="limitAndFormatInput(this, 3)"
                onkeydown="return isNumberKey(event)">  

                <script>
                    function limitAndFormatInput(input, maxLength) {
                        // Remove non-numeric characters
                        input.value = input.value.replace(/[^1-9]/g, '');

                        // Limit the input to maxLength digits
                        if (input.value.length > maxLength) {
                            input.value = input.value.slice(0, maxLength);
                        }
                    }

                    function isNumberKey(event) {
                        // Check if the pressed key is a number or a valid control key
                        return (event.key >= '1' && event.key <= '9') || ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight'].includes(event.key);
                    }
                </script>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
           
            </fieldset>

            <!-- Time of Service --> 

            <fieldset>
                <h2 class="fs-title">Time of Service</h2>
                <h3 class="fs-subtitle">Choose your Time of Service</h3>
                <label style="margin-right: 80%; font-size: 14px;">Enter your Date:</label>
                <input type="date" name="date" id="date" required/>

                <label style="margin-right: 75%; font-size: 14px;">Enter your Start Time:</label>
                <input type="time" name="stime" oninput="updateTimeMeridiem()" required/>

                <label style="margin-right: 78%; font-size: 14px;">Enter your End Time:</label>
                <input type="time" name="etime" oninput="updateTimeMeridiem()" required/>
                
                <script>
                    function updateTimeMeridiem() {
                        var startTimeInput = document.getElementsByName("stime")[0];
                        var endTimeInput = document.getElementsByName("etime")[0];

                        var meridiem = endTimeInput.value.includes("AM") ? "AM" : "PM";

                        // Add a hidden input to the form to include the meridiem in the submitted data
                        var hiddenInput = document.createElement("input");
                        hiddenInput.type = "hidden";
                        hiddenInput.name = "meridiem";
                        hiddenInput.value = meridiem;

                        // Append the hidden input to the form
                        document.forms[0].appendChild(hiddenInput);

                        return true; // Allow the form to submit
                    }
                </script>

                <script>
                        // Get the current date
                        var currentDate = new Date();

                        // Format the current date as YYYY-MM-DD
                        var formattedDate = currentDate.toISOString().split('T')[0];

                        // Set the min attribute of the date input to the current date
                        document.getElementById('date').min = formattedDate;
                </script>

                <input type="hidden" id="Status" placeholder="Enter the Status" name="Status" value="Pending">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="checkCalendar" class="check-calendar action-button" value="Check Calendar" data-toggle="modal" data-target="#calendarModal"/>

                <!-- Modal for Checking Calendar -->
                <div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="calendarModalLabel">Check Calendar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="fullcalendar.php" width="100%" height="450" frameborder="0"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <input type="button" name="submit" class="submit action-button" value="Submit" onclick="showConfirmation()"/>
                <h3 class="fs-subtitle">Note: For reservation changes or cancellations please contact us directly. Thank you </h3>
            </fieldset>

        </form>
        
    </div>
</div>

<!-- /.MultiStep Form -->

</main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script src="assets/js/swalert2.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <!-- ETO NA TALAGA YON -->
        <!-- GPT -->
        <!-- END GPT -->
        <script>
        function validateForm() {
        var fields = document.querySelectorAll("input[required]");
        var fieldMappings = {
            // Add your mappings here, e.g., actualName: "User-Friendly Name"
            "name": "Name",
            "address" : "Address",
            "email": "Email",
            "phone": "Phone Number",
            "pax" : "No. of People",
            "date" : "Date",
            "stime" : "Start Time",
            "etime" : "End Time"
            // Add more as needed
        };
        var emptyFields = [];

        for (var i = 0; i < fields.length; i++) {
            if (!fields[i].value) {
                // Get the mapped name or label of the empty field
                var mappedName = fieldMappings[fields[i].name] || fields[i].getAttribute('placeholder') || 'Unnamed Field';
                emptyFields.push(mappedName);
            }
        }

        if (emptyFields.length > 0) {
            // Create a specific error message mentioning the empty fields
            var errorMessage = "Please fill in all required fields: \n" + emptyFields.join(", ");

            Swal.fire({
                title: "Sorry!",
                text: errorMessage,
                icon: "error",
            });

            return false;
        }

        return true;
    }

        function showConfirmation() {
            if (validateForm()) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You want to reserve?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    confirmButtonColor: "#008000",
                    cancelButtonColor: "#ff0000",
                    customClass: {
                        confirmButton: "green-ok-button",
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios
                            .post(
                                "forms/reservation_form.php",
                                new FormData(document.querySelector("#msform"))
                            )
                            .then((response) => {
                                console.log(response); // Log the entire response for debugging

                                if (response.data.status === "success") {
                                    Swal.fire({
                                        title: "Success!",
                                        text: "Reservation Successful!",
                                        icon: "success",
                                    });
                                    document.querySelector("#msform").reset();
                                } else {
                                    console.log(response.data); // Log the error response for debugging

                                    if (
                                        response.data.message &&
                                        response.data.message.includes("already occupied")
                                    ) {
                                        Swal.fire({
                                            title: "Sorry!",
                                            text: response.data.message,
                                            icon: "error",
                                        });
                                    } else {
                                        Swal.fire({
                                            title: "Sorry!",
                                            text: "The Date is already occupied!",
                                            icon: "error",
                                        });
                                    }
                                }
                            })
                            .catch((error) => {
                                console.error(error);
                                Swal.fire({
                                    title: "Sorry!",
                                    text: "An unexpected error occurred",
                                    icon: "error",
                                });
                            });
                    } else {
                        // User clicked "No" or closed the dialog - do nothing
                    }
                });
            }
        }

        </script>

        <script>
        $(document).ready(function() {
            // Open fullscreen modal on input click
            $('#menuInput').on('click', function() {
            $('#fullscreenModal').modal('show');
            });

            // Handle menu item click
            $('.menu-item').on('click', function() {
            // Toggle checkbox on menu item click
            var checkbox = $(this).find('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
            });
        });
        </script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
    // Get all checkboxes for Themes
    var checkboxesThemes = document.querySelectorAll('.form-check-input[data-category="theme"]');
    
    // Get all checkboxes for Venue
    var checkboxesVenue = document.querySelectorAll('.form-check-input[data-category="venue"]');

    // Add event listener to each checkbox for Themes
    checkboxesThemes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            resetCheckboxes(checkbox, checkboxesThemes);
        });
    });

    // Add event listener to each checkbox for Venue
    checkboxesVenue.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            resetCheckboxes(checkbox, checkboxesVenue);
        });
    });
});
    // Restore the selected items when switching categories for Themes
    var themeTabs = document.querySelectorAll('.themes-tab'); // Assuming you have tabs with the class 'themes-tab'
    themeTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            restoreSelectedItems(checkboxesThemes, "theme");
        });
    });

    // Restore the selected items when switching categories for Venue
    var venueTabs = document.querySelectorAll('.venue-tab'); // Assuming you have tabs with the class 'venue-tab'
    venueTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            restoreSelectedItems(checkboxesVenue, "venue");
        });
    });

    // Function to reset other checkboxes in the same category
    function resetCheckboxes(checkbox, checkboxes) {
        if (checkbox.checked) {
            var category = checkbox.getAttribute('data-category');
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox && otherCheckbox.getAttribute('data-category') === category) {
                    otherCheckbox.checked = false;
                }
            });
        }
    }
    
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

    <script>
    function limitInput(element, maxLength) {
        let inputValue = element.value;
        if (inputValue.length > maxLength) {
        element.value = inputValue.slice(0, maxLength);
        }
    }
    
    </script>

  </body>
</html>


<!-- GPT --> 


