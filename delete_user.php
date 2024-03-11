<?php
include 'user.php';
$id = $_GET['user_id'];

$user = new User();
$user->deleteUser($id);
header("Location:index.php");

?>
