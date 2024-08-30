<?php

@include '../forms/dbConfig.php';

SESSION_start();
session_unset();
session_destroy();

header('location:../forms/login_form.php');

?>