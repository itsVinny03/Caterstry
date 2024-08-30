<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_admin";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error:" . $conn->connect_error);
}


$reserved_dates_query = "SELECT date FROM tb_pending WHERE Status = 'Pending'";
$reserved_dates_result = mysqli_query($conn, $reserved_dates_query);

$reserved_dates = [];
if ($reserved_dates_result) {
    while ($row = mysqli_fetch_assoc($reserved_dates_result)) {
        $reserved_dates[] = $row['date'];
    }
}

echo json_encode(['dates' => $reserved_dates]);

mysqli_close($conn);
?>
