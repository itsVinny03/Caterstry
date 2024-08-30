<?php
// Check if the query was successful
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display each row in the table
        echo "<div class='col-lg-4 menu-item'>";
        echo "<a href='#' class='glightbox'>";
        echo "<img src='data:image/png;base64," . base64_encode($row['image']) . "' class='menu-img img-fluid' alt=''>";
        echo "</a>";
        echo "<h4>{$row['name']}</h4>";
        echo "<td>";
        if ($row['status'] == 'Not Available') {
            echo "Not Available";
        } else {
            echo "Available";
        }
        echo "</div>";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle the query error
    echo "Error: " . mysqli_error($connection);
}
?>



