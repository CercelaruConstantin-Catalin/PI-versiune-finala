<?php
$user_id = $_SESSION['user_id'];

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $msg = $_POST['msg'];
   $number = $_POST['number'];

   $select_msg = mysqli_query($conn, "SELECT * FROM `messages` WHERE name = '$name' AND user_id = '$user_id'") or die('query failed');

   mysqli_query($conn, "INSERT INTO `messages`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
   $message[] = 'message sent!';
   header('location:HOME.php');

}



?>