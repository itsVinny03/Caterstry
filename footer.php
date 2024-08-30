<footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3 ms-5">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Example Street <br />
                Malvar, Batangas - PH<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +63 912 345 6789<br />
                <strong>Email:</strong> Thecatersindustry@example.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Fri: </strong> 9:00 AM - 8:00 PM<br />
                <strong>Sat-Sun:</strong> Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>The Caters Industry</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
        
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

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

<!----- SWEETALERT NA BAGO ------->
<!-- 
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
</script> -->