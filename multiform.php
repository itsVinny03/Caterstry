<?php include("header.php");?>

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
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="name" required placeholder="Enter your name"/>
                <input type="text" name="address" required placeholder="Enter you address"/>
                <input type="text" name="phone" required placeholder="Enter your phone Number" maxlength="11"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Menu & Theme & Venue</h2>
                <h3 class="fs-subtitle">Choose one per category</h3>

                    <div class="container mt-5">
                        <input type="text" class="form-control" id="menuInput" placeholder="Click to select menu">

                        <!-- Fullscreen Modal -->
                        <div class="modal fade" id="fullscreenModal" tabindex="-1" role="dialog" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="fullscreenModalLabel">Select Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe class="embed-responsive-item" src="menumodal.php" style="width: 100%; height: 100%; border: 0;"></iframe>
                                </div>

                                <div class="text-center mt-4">
                                    <button class="btn btn-primary" onclick="showSelectedItems()">Done</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                <!-- Theme Section -->

                <!-- <button type="button" class="btn btn-primary d-flex justify-content-center mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Choose a Theme
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div> -->

                <!-- VENUE SECTION -->
                
                <!-- <button type="button" class="btn btn-primary d-flex justify-content-start mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Choose a Venue
                </button> -->
               
                <input type="text" name="pax" required placeholder="Enter the No. of People"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Time of Service</h2>
                <h3 class="fs-subtitle">Choose your Time of Service</h3>
                <input type="date" name="date" required placeholder="Enter your date"/>
                <input type="time" name="stime" required placeholder="Enter your start time"/>
                <input type="time" name="etime" required placeholder="Enter your end time"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit" onclick="showConfirmation()"/>
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

        <script>
        function validateForm() {
            var fields = document.querySelectorAll("input[required]");
            for (var i = 0; i < fields.length; i++) {
                if (!fields[i].value) {
                    Swal.fire({
                        title: "Sorry!",
                        text: "Please fill in all required fields!",
                        icon: "error",
                    });
                    return false;
                }
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
                                if (response.data.status === "success") {
                                    Swal.fire({
                                        title: "Success!",
                                        text: "Reservation Successful!",
                                        icon: "success",
                                    });
                                    document.querySelector("#msform").reset();
                                } else {
                                    if (response.data.message && response.data.message.includes("already occupied")) {
                                        Swal.fire({
                                            title: "Error!",
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
                                    title: "Error!",
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

  </body>
</html>


<!----- SWEETALERT NA BAGO ------->

<!-- <script>
  function validateForm() {
    var fields = document.querySelectorAll("input[required]");
    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            Swal.fire({
                title: "Sorry!",
                text: "Please fill in all required fields!",
                icon: "error",
            });
            return false;
        }
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
        })// JavaScript

function submitForm() {

  Swal.fire({
    // Confirmation modal
  }).then((result) => {
    if (result.isConfirmed) {

      try {
        
        axios.post('reservation_form.php', formData)
          .then(response => {

            if(response.data.status === 'error') {
              Swal.fire({
                title: 'Error!',
                text: response.data.message,
                icon: 'error'
              });
            } else if(response.data.errors) {
              Swal.fire({
                title: 'Error!',
                text: response.data.errors,
                icon: 'error'
              });
            } else {
              Swal.fire({
                title: 'Success!',
                text: 'Reservation Successful!',
                icon: 'success'
              });
            }

          })
          .catch(error => {
            console.error(error);
            Swal.fire({
              title: 'Error!',
              text: 'An error occurred when submitting the form.',
              icon: 'error'
            });
          });

      } catch(error) {
        console.error(error);
        Swal.fire({
          title: 'Error!',
          text: 'An error occurred when submitting the form.',
          icon: 'error'
        });
      }

    }
  });
}}
} 
</script> -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the menu items are sent as a comma-separated string
    $selectedMenu = $_POST["selectedMenu"];

    // You may want to further process the selected menu, e.g., explode it into an array
    $selectedMenuArray = explode(", ", $selectedMenu);

    // Now, you can use $selectedMenuArray to interact with the database
    // Insert the menu items into your MySQL database
    $servername = "your_server";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert each selected menu item into the database
    foreach ($selectedMenuArray as $menu) {
        $sql = "INSERT INTO your_menu_table (menu_item) VALUES ('$menu')";
        $conn->query($sql);
    }

    // Close the database connection
    $conn->close();
}
?>
