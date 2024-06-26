<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about_home1.png" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer a wide range of products, including electronics, home goods, clothing, and more. Our team is dedicated to providing a seamless shopping experience for our customers, whether you shop online or in-store.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>