<?php
session_start();
include("header.php");
?>

    <main>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Need Help? <span>Contact Us</span></p>
          </div>

          <div class="row gy-4">
            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center justify-content-center"
              >
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Our Address</h3>
                  <p>Malvar, Batangas</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center justify-content-center"
              >
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>Thecatersindustry@example.com</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center justify-content-center"
              >
                <i class="icon bi bi-telephone flex-shrink-0 me-3"></i>
                <div class="me-2">
                  <h3>Call Us</h3>
                  <p>+63 912 345 6789</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center justify-content-center"
              >
                <i class="icon bi bi-share flex-shrink-0 me-3"></i>
                <div class="me-3">
                  <h3>Opening Hours</h3>
                  <div>
                    <strong>Mon-Fri:</strong> 9:00 AM - 8:00 PM<br />
                    <strong>Sat-Sun:</strong> Closed
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>
        </div>
    </section>
        
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>What Are They <span>Saying About Us</span></p>
            </div>

            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Booking was a breeze! The admin contacted me quickly, making sure everything was
                                            set. Thumbs up!
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Client 1</h3>
                                      
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="" class="img-fluid testimonial-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Easy reservation process, and the upfront downpayment step felt secure. Great
                                            service!
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Client 2</h3>
                                      
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="" class="img-fluid testimonial-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            Simple to book, and the admin was on the ball. Loved the straightforward
                                            process!
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Client 3</h3>
                                  
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="" class="img-fluid testimonial-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

      <!-- Feedback Form Section -->
    <section class="feedback-form" id="feedback-form" class="section-bg">
        <div class="container-md" data-aos="fade-up">
            <div class="section-header text-center">
                <h2>Give Us Your Feedback</h2>
                <p>We'd love to hear from you!</p>
            </div>

            <form action="" class="row" onsubmit="return validateForm()">
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <label for="rating">Rate your experience (1-5):</label>
                        <div class="stars text-center mb-3" onclick="handleRatingClick(event)">
                          <i class="bi bi-star" data-rating="1"></i>
                          <i class="bi bi-star" data-rating="2"></i>
                          <i class="bi bi-star" data-rating="3"></i>
                          <i class="bi bi-star" data-rating="4"></i>
                          <i class="bi bi-star" data-rating="5"></i>
                        </div>
                        <input type="hidden" name="selected-rating" id="selected-rating" required>
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="form-group text-center mb-3">
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="26" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <label for="comments">Comments or Feedback:</label>
                        <textarea rows="8" class="form-control" maxlength="75" id="comments" name="comments" required></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </div>
            </form>
          </div>
    </section>
      <!-- End Feedback Section -->

   <!-- Display Feedback Section -->
<section id="display-feedback" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Visitor Feedback</h2>
            <!-- Optional: Add a description or subtitle for the feedback section -->
        </div>
        <div class="swiper-container slides-2" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper" id="feedback-messages">
                <!-- The visitor feedback messages will be appended here -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <script>

      $(document).ready(function() {
          $(".dynamic-font-size").each(function() {
          var title = $(this).text();
          if (title.length > 40) {
              $(this).css("font-size", "90%"); // Adjust the percentage as needed
          }
          });
      });
    

      let clickedStars = [];

      function handleRatingClick(event) {

        const star = event.target;

        if(clickedStars.includes(star)) {
          // Already clicked, unselect it
          star.style.color = "black";
          clickedStars = clickedStars.filter(s => s !== star);
        } else {
          // New click, select it
          star.style.color = "yellow"; 
          clickedStars.push(star); 
        }

        // Get average rating
        let totalRating = 0;
        clickedStars.forEach(star => {
          totalRating += parseInt(star.getAttribute("data-rating")); 
        });
        const rating = totalRating / clickedStars.length;

        // Set rating val 
        document.getElementById("selected-rating").value = rating;

      }
      
    </script>

<script>
  // Function to handle form submission
  function handleFormSubmit(event) {
      event.preventDefault();

      // Get form data
      const rating = $("#selected-rating").val();
      const name = $("#name").val();
      const comments = $("#comments").val();

      // Create a new feedback object
      const feedbackEntry = {
          rating: rating,
          name: name,
          comments: comments
      };

      // Generate stars HTML based on rating
      const starsHtml = generateStars(rating); 

      const visitorFeedback = `
        <div class="testimonial-content">
          // other content
          <div class="stars">
            ${feedbackEntry.stars}  
          </div>
        </div>
        `;

      // Helper function to generate stars
      function generateStars(rating) {
        // stars logic
        const filledStars = '<i class="bi bi-star-fill"></i>'.repeat(rating);
        const emptyStars = '<i class="bi bi-star"></i>'.repeat(5 - rating);

      return filledStars + emptyStars;  
    }

      // Add stars HTML to feedback entry
      feedbackEntry.stars = starsHtml;

      // Retrieve existing feedback entries from localStorage
      const existingFeedback = JSON.parse(localStorage.getItem('feedbackEntries')) || [];

      // Add the new feedback entry to the array
      existingFeedback.push(feedbackEntry);

      // Save the updated feedback entries to localStorage
      localStorage.setItem('feedbackEntries', JSON.stringify(existingFeedback));

      // Update the HTML of the feedback section
      const feedbackMessages = existingFeedback.map(entry => `
          <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="row justify-content-center">
                      <div class="row-lg-6">
                          <div class="testimonial-content">
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  ${entry.comments}
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                              <h3>${entry.name}</h3>
                              <h4>Visitor</h4>
                              <div class="stars">
                                  ${generateStars(entry.rating)}
                              </div>
                          </div>
                      </div>
                      <div class="row-lg-2 text-center">
                          <img src="" class="img-fluid testimonial-img" alt="">
                      </div>
                  </div>
              </div>
          </div>
      `).join('');

      // Update the HTML of the feedback section
      $(".slides-2 .swiper-wrapper").html(feedbackMessages);

      // Initialize Swiper for the "Visitors Feedback" section
      const swiperFeedback = new Swiper(".slides-2", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          breakpoints: {
              768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
              },
              992: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
          },
      });

      // Clear form fields
      $("#selected-rating").val("");
      $("#name").val("");
      $("#comments").val("");
  }

  // Helper function to generate star icons based on rating
  function generateStars(rating) {
      const filledStars = '<i class="bi bi-star-fill"></i>'.repeat(rating);
      const emptyStars = '<i class="bi bi-star"></i>'.repeat(5 - rating);
      return filledStars + emptyStars;
  }

  // Attach form submission handler
  $(".feedback-form").on("submit", handleFormSubmit);

  // Load existing feedback entries on page load
  $(document).ready(function () {
      const existingFeedback = JSON.parse(localStorage.getItem('feedbackEntries')) || [];
      const feedbackMessages = existingFeedback.map(entry => `
          <div class="swiper-slide">
              <div class="testimonial-item">
                          <div class="testimonial-content">
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  ${entry.comments}
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                              <h3>${entry.name}</h3>
                              <h4>Visitor</h4>
                              <div class="stars">
                                  ${generateStars(entry.rating)}
                              </div>
                          </div>
                     
                      <div class="text-center">
                          <img src="" class="img-fluid testimonial-img" alt="">
                      </div>
              </div>
          </div>
      `).join('');

      // Update the HTML of the feedback section
      $(".slides-2 .swiper-wrapper").html(feedbackMessages);

      // Initialize Swiper for the "Visitors Feedback" section
      const swiperFeedback = new Swiper(".slides-2", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          breakpoints: {
              768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
              },
              992: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
          },
      });
  });
</script>

</section>


      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <p>Learn More <span>About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-7 position-relative about-img img-fluid rounded-5"
              style="
                background-image: url(assets/img/catt.jpg);
                background-repeat: no-repeat;
              "
              data-aos="fade-up"
              data-aos-delay="150"
            ></div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
              <div class="content ps-5 lh-lg mt-4">
                <h2><span>The Caters Industry</span></h2>
                <p
                  style="
                    text-align: justify;
                    line-height: 2.5;
                    font-weight: 600;
                  "
                  class="mt-5"
                >
                  An online catering system to manage their operations more
                  effectively and efficiently. By booking the Caters Industry ,
                  you can have food ready for your guests when they arrive. You
                  can engage your guests instead of feeling glued to the grill
                  and relax without worrying about making sure everyone has food
                  in front of them. Caters Industry can relieve you of the
                  burden of preparing and planning your special event.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!--------- FREQUENTLY ASKED QUESTIONS -------->
        <div id="faq" class="py-md-5">
          <h2 class="my-5 text-center">FAQs</h2>
          <div class="accordion w-75 mx-auto" id="accordionExample">
            <!---- FAQs 1-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  <strong>How do I place a catering reservation?</strong>
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  To place a catering order, simply visit our website and
                  navigate to the "Reservation" section. Follow the prompts,
                  select menu, theme, venue and provide the
                  necessary details.
                </div>
              </div>
            </div>

            <!---- FAQs 2-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  <strong>What types of events do you cater to?</strong>
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  We cater to a wide range of events, including weddings,
                  corporate meetings, parties, and more. Our menu and services
                  can be customized to suit your specific event requirements.
                </div>
              </div>
            </div>

            <!---- FAQs 3-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  <strong
                    >Is there a limit for a reservation?</strong
                  >
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Yes, there's a limit for reservations. Once a reservation is made for a specific day,
                  further reservations for that day are unavailable. 
                </div>
              </div>
            </div>

            <!---- FAQs 4-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  <strong>What is your cancellation policy?</strong>
                </button>
              </h2>
              <div
                id="collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="headingFour"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Our cancellation policy allows cancellations up to 1 week before the event for a full refund. Please contact us within this timeframe
                  to process your cancellation.
                </div>
              </div>
            </div>

            <!---- FAQs 5-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive"
                >
                  <strong
                    >How do I make a payment for my catering order?</strong
                  >
                </button>
              </h2>
              <div
                id="collapseFive"
                class="accordion-collapse collapse"
                aria-labelledby="headingFive"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  To make a payment for your catering reservation, our admin will contact you for confirmation before approval.
                  A downpayment is required to finalize your reservation.
                </div>
              </div>
            </div>

            
          </div>
        </div>

      </section>
    </main>

     <!-- ======= Footer ======= -->
     <?php include("footer.php");?>


  </body>
</html>
