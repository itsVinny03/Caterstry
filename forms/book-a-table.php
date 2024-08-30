<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = filter_input(INPUT_POST, "name");
    $phoneNumber = filter_input(INPUT_POST, "phone");
    $date = date('Y-m-d', strtotime($_POST['date'])); // convert date format to yyyy-mm-dd
    $email = filter_input(INPUT_POST, "email");
    $time = date('h:i A', strtotime($_POST['time'])); // convert time format to hh:ii AM/PM
    $guests = filter_input(INPUT_POST, "people");

    if (!empty($fullName) && !empty($email) && !empty($phoneNumber) && !empty($date) && !empty($time) && !empty($guests)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "db_client";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO tb_info (fullName, email, phoneNumber, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssi", $fullName, $email, $phoneNumber, $date, $time, $guests);

            if ($stmt->execute()) {
                // Return JSON response to indicate success
                $response = array("status" => "success");
                echo json_encode($response);
            } else {
                // Return JSON response to indicate failure
                $response = array("status" => "error");
                echo json_encode($response);
            }

            $stmt->close();
            $conn->close();
        }
    } else {
        // Return JSON response to indicate missing input
        $response = array("status" => "missing_input");
        echo json_encode($response);
    }
}
?>

