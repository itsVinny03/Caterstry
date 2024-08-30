<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'db_admin');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Query the database to retrieve the selected row
    $stmt = $conn->prepare("SELECT * FROM tb_accept WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close database connection
    $stmt->close();
    $conn->close();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'db_admin');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $menu = $_POST['menu'];

    if (!is_array($menu)) {
        $menu = array($menu);
    }
    // Check if $menu is not null before imploding
    $menu_string = !is_null($menu) ? implode(',', $menu) : '';

    $themes = isset($_POST["themes"]) ? $_POST["themes"] : null;

        if (!is_array($themes)) {
            $themes = array($themes);
        }

    // Check if $themes is not null before imploding
    $themes_string = !is_null($themes) ? implode(',', $themes) : '';

    $venue = isset($_POST["venue"]) ? $_POST["venue"] : null;

        if (!is_array($venue)) {
            $venue = array($venue);
        }

    // Check if $venue is not null before imploding
    $venue_string = !is_null($venue) ? implode(',', $venue) : '';


     $pax = $_POST["pax"];
     $date =  date('Y-m-d', strtotime($_POST['date']));
     $stime = date("h:i A", strtotime($_POST["stime"]));
     $etime = date("h:i A", strtotime($_POST["etime"]));
    
     // Check if the selected time has reached the limit of 1 appointment
    $appointments_query = "SELECT COUNT(*) as num_appointments FROM tb_accept WHERE date = '$date'";
    $appointments_result = mysqli_query($conn, $appointments_query);

    if ($appointments_result) {
        $appointments_row = mysqli_fetch_assoc($appointments_result);
        $num_appointments = $appointments_row['num_appointments'];

        if ($num_appointments >= 5) {
            die("Sorry, it reached the maximum number of reservation.");
        }
    }

    // Check if there is already a record with the same date
        $existing_query = "SELECT COUNT(*) as num_records FROM tb_accept WHERE date = '$date'";
        $existing_result = mysqli_query($conn, $existing_query);

        if ($existing_result) {
            $existing_row = mysqli_fetch_assoc($existing_result);
            $num_records = $existing_row['num_records'];

            if ($num_records > 0) {
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script>
                    // Display SweetAlert2 when the date is already occupied
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Sorry, The Date is already occupied.',
                    });
                </script>
                <?php
                exit(); // Stop further execution
            }
        }
// Continue with the rest of your code if the date is not occupied

    // Update the record in the database
    $stmt = $conn->prepare("UPDATE tb_info SET name=?, address=?, phone=?, menu=?, themes=?, venue=?, date=?, pax=?, stime=?, etime=? WHERE id=?");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("sssssssssi", $name, $address, $phone, $menu_string, $themes_string, $venue_string, $date, $pax, $stime, $etime, $id);
    $stmt->execute();

    // Close database connection
    $stmt->close();
    $conn->close();

    // Redirect back to admin page after update
    header('Location:adminpage.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
    <meta content="width=device-width", initial-scale=1.0" name="viewport">
    <title>EDIT RECORD</title>
<link rel="stylesheet" type="text/css" href="edits.css">

</head>
<body>
	<div class="container">

		<!-- check if an ID was passed in the URL -->
		<?php
			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				// connect to database
				$conn = new mysqli('localhost', 'root', '', 'db_admin');
				if ($conn->connect_error) {
					die("Connection Failed: " . $conn->connect_error);
				}

				// query the database to retrieve the selected row
				$stmt = $conn->prepare("SELECT * FROM tb_accept WHERE id = ?");
				$stmt->bind_param("i", $id);
				$stmt->execute();
				$result = $stmt->get_result();
				$row = $result->fetch_assoc();

                if(isset($error)) { ?>
					<div class="error"><?php echo $error; ?></div>
				<?php }

				// close database connection
				$stmt->close();
				$conn->close();
			}
		?>

		<!-- display the form to edit the selected record -->
		<form method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

			<div>
				<label>Name:</label>
				<input type="text" name="name" value="<?php echo $row['name']; ?>" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode === 46 || event.charCode === 32">
			</div>

			<div>
				<label>Address:</label>
				<input type="text" name="address" value="<?php echo $row['address']; ?>">
			</div>

			<div>
				<label>Phone:</label>
				<input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"<?php echo $row['phone']; ?>>
				<div id="phone-error" style="display: none; color: red;"></div>
                
                <script>
                    const phoneInput = document.getElementById('phone');
                    const phoneError = document.getElementById('phone-error');

                    phoneInput.addEventListener('input', function() {
                        if (phoneInput.value.length > 11) {
                    phoneInput.value = phoneInput.value.slice(0, 11);
                    phoneError.style.display = 'block';
                    } else {
                        phoneError.style.display = 'none';
                    }
                    });
                </script>
			</div>

			<div class="checkboxes">
                <label>Menu:</label><br>
					<input type="checkbox" value="Corn Chowder" name="menu[]" <?php if ($row['menu'] == 'Corn Chowder') echo 'selected'; ?>>Corn Chowder</input>
					<input type="checkbox" value="Mushroom Soup" name="menu[]" <?php if ($row['menu'] == 'Mushroom Soup') echo 'selected'; ?>>Mushroom Soup</input>
					<input type="checkbox" value="Pumpkin Soup" name="menu[]" <?php if ($row['menu'] == 'Pumpkin Soup') echo 'selected'; ?>>Pumpkin Soup</input>
					<input type="checkbox" value="Java Rice" name="menu[]" <?php if ($row['menu'] == 'Java Rice') echo 'selected'; ?>>Java Rice</input>
					<input type="checkbox" value="Steamed Rice" name="menu[]" <?php if ($row['menu'] == 'Steamed Rice') echo 'selected'; ?>>Steamed Rice</input>
					<input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    <input type="checkbox" value="Corn Chowder" name="menu[]" <?php if ($row['menu'] == 'Corn Chowder') echo 'selected'; ?>>Corn Chowder</input>
					<input type="checkbox" value="Mushroom Soup" name="menu[]" <?php if ($row['menu'] == 'Mushroom Soup') echo 'selected'; ?>>Mushroom Soup</input>
					<input type="checkbox" value="Pumpkin Soup" name="menu[]" <?php if ($row['menu'] == 'Pumpkin Soup') echo 'selected'; ?>>Pumpkin Soup</input>
					<input type="checkbox" value="Java Rice" name="menu[]" <?php if ($row['menu'] == 'Java Rice') echo 'selected'; ?>>Java Rice</input>
					<input type="checkbox" value="Steamed Rice" name="menu[]" <?php if ($row['menu'] == 'Steamed Rice') echo 'selected'; ?>>Steamed Rice</input>
					<input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    <input type="checkbox" value="Corn Chowder" name="menu[]" <?php if ($row['menu'] == 'Corn Chowder') echo 'selected'; ?>>Corn Chowder</input>
					<input type="checkbox" value="Mushroom Soup" name="menu[]" <?php if ($row['menu'] == 'Mushroom Soup') echo 'selected'; ?>>Mushroom Soup</input>
					<input type="checkbox" value="Pumpkin Soup" name="menu[]" <?php if ($row['menu'] == 'Pumpkin Soup') echo 'selected'; ?>>Pumpkin Soup</input>
					<input type="checkbox" value="Java Rice" name="menu[]" <?php if ($row['menu'] == 'Java Rice') echo 'selected'; ?>>Java Rice</input>
					<input type="checkbox" value="Steamed Rice" name="menu[]" <?php if ($row['menu'] == 'Steamed Rice') echo 'selected'; ?>>Steamed Rice</input>
					<input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    <input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    <input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    <input type="checkbox" value="Yangzhou Fried Rice" name="menu[]" <?php if ($row['menu'] == 'Yangzhou Fried Rice') echo 'selected'; ?>>Yangzhou FR</option>
                    

				</select>
			</div>

            <div class="checkboxes">
                <label>Themes:</label><br>
					<input type="checkbox" value="Theme 1" name="themes[]" <?php if ($row['themes'] == 'Theme 1') echo 'selected'; ?>>Theme 1</input>
					<input type="checkbox" value="Theme 2" name="themes[]" <?php if ($row['themes'] == 'Theme 2') echo 'selected'; ?>>Theme 2</input>
					<input type="checkbox" value="Theme 3" name="themes[]" <?php if ($row['themes'] == 'Theme 3') echo 'selected'; ?>>Theme 3</input>
					<input type="checkbox" value="Theme 4" name="themes[]" <?php if ($row['themes'] == 'Theme 4') echo 'selected'; ?>>Theme 4</input>
					<input type="checkbox" value="Theme 5" name="themes[]" <?php if ($row['themes'] == 'Theme 5') echo 'selected'; ?>>Theme 5</input>
					<input type="checkbox" value="Theme 6" name="themes[]" <?php if ($row['themes'] == 'Theme 6') echo 'selected'; ?>>Theme 6</option>
                    <input type="checkbox" value="Theme 7" name="themes[]" <?php if ($row['themes'] == 'Theme 7') echo 'selected'; ?>>Theme 7</input>
					<input type="checkbox" value="Theme 8" name="themes[]" <?php if ($row['themes'] == 'Theme 8') echo 'selected'; ?>>Theme 8</input>
					<input type="checkbox" value="Theme 9" name="themes[]" <?php if ($row['themes'] == 'Theme 9') echo 'selected'; ?>>Theme 9</input>
				</select>
			</div>

            <div class="checkboxes">
                <label>Venue:</label><br>
					<input type="checkbox" value="Casa Lucido" name="venue[]" <?php if ($row['venue'] == 'Casa Lucido') echo 'selected'; ?>>Casa Lucido</input>
					<input type="checkbox" value="Villa Salud" name="venue[]" <?php if ($row['venue'] == 'Villa Salud') echo 'selected'; ?>>Villa Salud</input>
					<input type="checkbox" value="Mango Hills" name="venue[]" <?php if ($row['venue'] == 'Mango Hills') echo 'selected'; ?>>Mango Hills</input>
					<input type="checkbox" value="Eloquente" name="venue[]" <?php if ($row['venue'] == 'Eloquente') echo 'selected'; ?>>Eloquente</input>
					<input type="checkbox" value="La Mariposa" name="venue[]" <?php if ($row['venue'] == 'La Mariposa') echo 'selected'; ?>>La Mariposa</input>
					<input type="checkbox" value="South Road" name="venue[]" <?php if ($row['venue'] == 'South Road') echo 'selected'; ?>>South Road</option>
				</select>
			</div>

            <div>
				<label>Pax:</label>
				<input type="text" id="pax" name="pax" value="<?php echo $row['pax']; ?>">
            </div>

			<div>
				<label>Date:</label>
				<input type="date" name="date" required min="2000-01-01" max="2090-12-31" oninput="checkDate()" value="<?php echo $row['date']?>">

				<script>
                function checkDate() {
                    const selectedDate = new Date(document.getElementById("date").value);
                    const currentDate = new Date();
                    if (selectedDate.getDay() === 3 && selectedDate > currentDate) { // 3 corresponds to Wednesday
                    document.getElementById("date").setCustomValidity("Please choose a date that is not a Wednesday.");
                } else {
                    document.getElementById("date").setCustomValidity("");
                    }
                }

            	</script>
			</div>

			<div>
                <label>Start Time:</label>
                <input type="time" name="stime" <?php echo $row['stime']?>/>
            </div>

            <div>
                <label>End Time:</label>
                <input type="time" name="etime" <?php echo $row['etime']?>/>
            </div>

			<button type="submit" name="update">Update</button>
			<a href="Admin.php">Cancel</a>
		</form>

	</div>
</body>
</html>