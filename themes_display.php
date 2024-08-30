<?php
// Assuming you have a database connection

// Your SQL query to select theme data
$queryThemes = "SELECT name, image, status, description FROM tb_themes";

$resultThemes = mysqli_query($connection, $queryThemes);

// Check if the query was successful
if ($resultThemes) {
    while ($rowTheme = mysqli_fetch_assoc($resultThemes)) {
        // Convert BLOB image to base64
        $base64Image = base64_encode($rowTheme['image']);

        // Display each theme in the theme section
        echo "<div class='col-lg-4 menu-item'>";
        echo "<a href='data:image/png;base64,{$base64Image}' class='glightbox'>";
        echo "<img src='data:image/png;base64,{$base64Image}' class='menu-img img-fluid border border-secondary border-2 rounded-5' alt=''>";
        echo "</a>";
        echo "<h4>{$rowTheme['name']}</h4>";
        // Check status and display description accordingly
        echo "<td>";
        if ($rowTheme['status'] == 'Not Available') {
            echo "Not Available";
        } else {
            echo "Available";
        }
        echo "</div>";
    }

    // Free the result set
    mysqli_free_result($resultThemes);
} else {
    // Handle the query error
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
