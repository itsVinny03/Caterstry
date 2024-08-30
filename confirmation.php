<?php
session_start();
include("dbConfig.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $menu = $_POST['menu'];

    if (!is_array($menu)) {
        $menu = array($menu);
    }
    // Check if $menu is not null before imploding
    $menu_string = !is_null($menu) ? implode(',', $menu) : '';

    $themes = $_POST["themes"];

    if (!is_array($themes)) {
        $themes = array($themes);
    }
    // Check if $themes is not null before imploding
    $themes_string = !is_null($themes) ? implode(',', $themes) : '';

    $venue = $_POST["venue"];

    if (!is_array($venue)) {
        $venue = array($venue);
    }
    // Check if $venue is not null before imploding
    $venue_string = !is_null($venue) ? implode(',', $venue) : '';

    $pax = $_POST["pax"];
    $date =  date('Y-m-d', strtotime($_POST['date']));
    $stime = date("h:i A", strtotime($_POST["stime"]));
    $etime = date("h:i A", strtotime($_POST["etime"]));

    $existing_query = "SELECT COUNT(*) as num_records FROM tb_pending WHERE date = '$date'";
    $existing_result = mysqli_query($conn, $existing_query);

    if ($existing_result) {
        $existing_row = mysqli_fetch_assoc($existing_result);
        $num_records = $existing_row['num_records'];

        if ($num_records > 0) {
            echo json_encode(['status' => 'error', 'message' => 'The date is already occupied!']);
            exit; // Terminate the script
        }
    }

    $sql = "INSERT INTO tb_pending (name, address, phone, menu, themes, venue, pax, date, stime, etime, Status)
        VALUES ('$name', '$address', '$phone', '$menu_string', '$themes_string', '$venue_string', '$pax', '$date', '$stime', '$etime', 'Pending')";
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>


   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Caters Industry</title> <!-- Corrected the title tag -->
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="icon" href="Icon.png">
</head>
<body>
    <div class="container">
        <h3>Reservation Confirmation</h3>
        <p>Your reservation has been processed! Thank you for choosing Caters Industry. If you want to cancel your Reservation, please Contact here 0919-123-4567.<br> Please check your details below:</p>
        <div class="receipt">
        <?php
          // Retrieve values from URL parameters using $_GET
          if ($_SERVER["REQUEST_METHOD"] != "POST"){
            $name = isset($_GET['name']) ? $_GET['name'] : '';
            $address = isset($_GET['address']) ? $_GET['address'] : '';
            $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
            $menu = isset($_GET['menu']) ? $_GET['menu'] : '';
            $themes = isset($_GET['themes']) ? $_GET['themes'] : '';
            $venue = isset($_GET['venue']) ? $_GET['venue'] : '';
            $pax = isset($_GET['pax']) ? $_GET['pax'] : '';
            $date = isset($_GET['date']) ? $_GET['date'] : '';
            $stime = isset($_GET['stime']) ? $_GET['stime'] : '';
            $etime = isset($_GET['etime']) ? $_GET['etime'] : '';
          }
            // Display the values
            echo "<p><strong>Name: </strong> " . $name . "</p>";
            echo "<p><strong>Address: </strong> " . $address . "</p>";
            echo "<p><strong>Phone Number: </strong> " . $phone . "</p>";
            echo "<p><strong>Service: </strong> " . $menu . "</p>";
            echo "<p><strong>Themes: </strong> " . $themes . "</p>";
            echo "<p><strong>Venue: </strong> " . $venue . "</p>";
            echo "<p><strong>Pax: </strong> " . $pax . "</p>";
            echo "<p><strong>Date: </strong> " . $date . "</p>";
            echo "<p><strong>Start Time: </strong> " . $stime . " </p>";
            echo "<p><strong>End Time: </strong> " . $etime . "</p>";
          
            ?>
        </div>
        <div class="buttons">
            <button class="m-button"> <a href="resform.php">Make Another Reservation</a></button>
            <!-- Removed the input field with name 'id' as it is not defined -->
        </div>
    </div>
</body>
</html>

