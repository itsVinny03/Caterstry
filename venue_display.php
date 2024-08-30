<?php

// Include your database connection script here
$connection = mysqli_connect("localhost", "root", "", "db_admin");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your SQL query to select venue data
$queryVenues = "SELECT name, image, status, description FROM tb_venues";

$resultVenues = mysqli_query($connection, $queryVenues);

// Check if the query was successful
if ($resultVenues) {
    while ($rowVenues = mysqli_fetch_assoc($resultVenues)) {
        // Convert BLOB image to base64
        $base64Image = base64_encode($rowVenues['image']);

        // Display each venue in the venue section
        echo "<div class='col-lg-4 menu-item'>";
        echo "<a href='data:image/png;base64,{$base64Image}' class='glightbox'>";
        echo "<img src='data:image/png;base64,{$base64Image}' class='menu-img img-fluid border border-secondary border-2 rounded-5' alt=''>";
        echo "</a>";
        echo "<h6 style='text-align: justify'>{$rowVenues['name']}</h6>";
        echo "<td>";
        if ($rowVenues['status'] == 'Not Available') {
            echo "Not Available";
        } else {
            echo "Available";
        }
        echo "</div>";
    }
    // Free the result set
    mysqli_free_result($resultVenues);
} else {
    // Handle the query error
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
