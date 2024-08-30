<?php
session_start();
include("dbConfig.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the JSON data from the request
    $selectedItemsJson = file_get_contents('php://input');
    $selectedItems = json_decode($selectedItemsJson, true);

    // Iterate over the selected items and insert them into the database
    foreach ($selectedItems as $item) {
        $menuItemID = $item['id'];
        $menuCategory = $item['category'];

        // Insert the data into your database table
        // Modify this query according to your database structure
        $insertQuery = "INSERT INTO user_selected_menu (user_id, menu_item_id, category) 
                        VALUES (1, '$menuItemID', '$menuCategory')";
        $conn->query($insertQuery);
    }

    echo json_encode(['status' => 'success']);
}

$conn->close();
?>
