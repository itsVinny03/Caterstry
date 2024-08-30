<?php

@include 'dbConfig.php';

session_start();

if(isset($_POST['submit'])){

   $Username = isset($_POST['Username']) ? mysqli_real_escape_string($conn, $_POST['Username']) : '';
	$Password = isset($_POST['Password']) ? md5($_POST['Password']) : '';

   $select = " SELECT * FROM tb_admin WHERE Username = '$Username' && Password = '$Password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['User_Type'] == 'Admin'){

         $_SESSION['AdminName'] = $row['Name'];
         header('location:../Admindashboard/adminpage.php');

      }
   }else{
      $error[] = 'Incorrect Username or Password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOGIN FORM</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../assets/css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>SIGN IN</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="Username" required placeholder="Enter your Username">
      <input type="password" name="Password" required placeholder="Enter your Password">
      <input type="submit" name="submit" value="LOGIN" class="form-btn">
   </form>


   <script>

    const eyeIcon = document.querySelector('.fa-eye');
    const passwordInput = document.querySelector('.passwordInput input');

    eyeIcon.addEventListener('click', () => {
        if(passwordInput.type === "password"){
            passwordInput.type = 'text';
            eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        } else{
            passwordInput.type = 'password';
            eyeIcon.classList.replace ('fa-eye-slash', 'fa-eye');
        }
    
});

   </script>

</div>

</body>
</html>
