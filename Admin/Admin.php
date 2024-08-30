<?php
// Start the session and include the config file
// session_start();
// include '../forms/dbConfig.php';

// // Redirect to login page if not logged in
// if(!isset($_SESSION['AdminName'])){
// 	header('location:../forms/login_form.php');
// }

// // check if a delete button was clicked
// if (isset($_POST['delete'])) {
//   // get the ID of the row to delete
//   $id = $_POST['id'];

//   // connect to database
//   $conn = new mysqli('localhost', 'root', '', 'db_client');
//   if ($conn->connect_error) {
//     die("Connection Failed: " . $conn->connect_error);
//   }

//   // prepare and execute the delete statement
//   $stmt = $conn->prepare("DELETE FROM tb_info WHERE id = ?");
//   $stmt->bind_param("i", $id);
//   $stmt->execute();

//   // check if the delete was successful
//   if ($stmt->affected_rows > 0) {
//     echo "Record deleted successfully";
//   } else {
//     echo "Error deleting record: " . $conn->error;
//   }

//   // close database connection
//   $stmt->close();
//   $conn->close();
// }

// // query the database to display all rows
// $conn = new mysqli('localhost', 'root', '', 'db_client');
// if ($conn->connect_error) {
//   die("Connection Failed: " . $conn->connect_error);
// }

// $result = $conn->query("SELECT * FROM tb_info");

// if(isset($_GET['date'])) {
// 	$date = $_GET['date'];
// 	$result = $conn->query("SELECT * FROM tb_info WHERE date='$date'");
//   } else {
// 	$result = $conn->query("SELECT * FROM tb_info");
//   }

?>

<?php
// Start the session and include the config file
session_start();
include '../forms/dbConfig.php';

// Redirect to login page if not logged in
if(!isset($_SESSION['AdminName'])){
	header('location:../forms/login_form.php');
}

// check if a delete button was clicked
if (isset($_POST['delete'])) {
  // get the ID of the row to delete
  $id = $_POST['id'];

  // connect to database
  $conn = new mysqli('localhost', 'root', '', 'db_client');
  if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
  }

  // prepare and execute the delete statement
  $stmt = $conn->prepare("DELETE FROM tb_info WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();

  // check if the delete was successful
if ($stmt->affected_rows > 0) {
    ?>
    <script>
        Swal.fire({
            title: 'Success!',
            text: 'Record deleted successfully',
            icon: 'success'
        }).then(() => {
            window.location.href = 'Admin.php'; // Redirect to your desired page
        });
    </script>
    <?php
} else {
    ?>
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Error deleting record',
            icon: 'error'
        });
    </script>
    <?php
}

  // close database connection
  $stmt->close();
  $conn->close();
}

// query the database to display all rows
$conn = new mysqli('localhost', 'root', '', 'db_client');
if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM tb_info");

if(isset($_GET['date'])) {
	$date = $_GET['date'];
	$result = $conn->query("SELECT * FROM tb_info WHERE date='$date'");
  } else {
	$result = $conn->query("SELECT * FROM tb_info");
  }

// display the rows and a delete button for each row
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Reservation System for Catering Services</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />


    <link href="../assets/img/logo-logo-removebg-preview.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  

    
    <link href="../assets/css/main.css" rel="stylesheet" />
    <link href="Admin.css" rel="stylesheet" />
  </head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="Admin.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>
            <img
              src="../assets/img/logo-logo-removebg-preview.png"
              style="max-height: 100px"
            />
          </h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="Admin.php">Home</a></li>
            <li><a href="pending.php">Pending</a></li>
            <li><a href="accepted.php">Accepted</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->
    <section>
        <div class="container">
            <div class="content">
                <a href="Logout.php" class="btn btn-danger">Log Out</a>
            </div>

            <div class="search-container">
                <input type="text" placeholder="Search..." id="search-bar">
                <button type="submit" name="back" class="back-btn"><a href="Admin.php">Back</a></button>
            </div>

            <form method="get" class="filter-form">
                <label for="date">Filter by Date:</label>
                <input type="date" id="date" name="date">
                <button type="submit">Filter</button>
                <button type="submit" name="back" class="back-btn"><a href="Admin.php">Back</a></button>
            </form>

            <!-- <button type="submit" name="back" class="back-btn active"><a href="Admin.php">Back</a></button> -->

            <div class="container mt-5">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Menu</th>
                                <th>Theme</th>
                                <th>Venue</th>
                                <th>Pax</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['menu']; ?></td>
                                    <td><?php echo $row['themes']; ?></td>
                                    <td><?php echo $row['venue']; ?></td>
                                    <td><?php echo $row['pax']; ?></td>
                                    <td><?php echo date('m-d-Y', strtotime($row['date'])); ?></td>
                                    <td><?php echo date('g:i A', strtotime($row['stime'])); ?></td>
                                    <td><?php echo date('g:i A', strtotime($row['etime'])); ?></td>
                                    <td><a href="edit_record.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        
                                        <form method="post" id="deleteForm">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <button type="button" id="deleteButton" onclick="handleDeleteConfirmation()" class="btn btn-danger" name="delete" >Delete</button>
                                        </form>


                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container" >
            <div class="copyright">
            &copy; Copyright <strong><span>The Caters Industry</span></strong
            >. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>

        <a
        href="#"
        class="scroll-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
        ></a>

    </footer>



  <script>
		const searchBar = document.getElementById('search-bar');
			searchBar.addEventListener('keyup', function(event) {
				const input = event.target.value.toLowerCase();
				const rows = document.querySelectorAll('table tr');
					rows.forEach(function(row) {
				const data = row.textContent.toLowerCase();
				if (data.indexOf(input) !== -1) {
					row.style.display = 'table-row';
				} else {
					row.style.display = 'none';
				}
				});
			});
	</script>

    <script>
        function toggleNav() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>


    <!-- Bootstrap JavaScript dependencies (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!---- Multi-Step- Form ------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/multiform.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

    <!-- SweetAlert2 initialization -->
<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });
</script>

<!-- JavaScript code -->
<script>
    function handleDeleteConfirmation() {
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('deleteForm').submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // If canceled, show a message
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                );
            }
        });
    }
</script>



</body>
</html>





<!-- GPT --> 
