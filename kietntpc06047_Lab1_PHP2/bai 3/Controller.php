<?php 
include "Model.php";

$email = $_POST['email'];
$user = get_user($email);

include 'View.php'
?>