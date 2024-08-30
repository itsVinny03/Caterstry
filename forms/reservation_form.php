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
        VALUES ('$name', '$address', '$phone', '$menu_string', '$themes_string', '$venue_string', '$pax', '$date', STR_TO_DATE('$stime', '%h:%i %p'), STR_TO_DATE('$etime', '%h:%i %p'), 'Pending')";
     

    if ($conn->query($sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Reservation failed. Some error occurred.']);
    }
}







