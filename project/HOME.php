<?php
include 'config-2.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLUE TECH</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="css/style-0.css">
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css">

</head>
<body>

<!-- header section starts  -->

<?php
include 'components/header.php';
?>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images-0/hmimg.jpg" alt="">
    </div>


    <div class="content">
        <span>&nbsp fast and simple </span>
        <h3>&nbspthe true nature of tehnology</h3>
        <a href="#product" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images-0/banner1.jpg" alt="">
        <div class="content">
            <h3 style="color:rgb(137, 230, 246)">special offer</h3>
            <p style="color:rgb(137, 230, 246)">upto 45% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="images-0/banner2.webp" alt="">
        <div class="content">
            <h3 style="color:rgb(137, 230, 246)">limited offer</h3>
            <p style="color:rgb(137, 230, 246)">upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container">

        <div class="box">
            <h3>MICE</h3>
            <img src="images-0/mouse1.jpg" alt="">
            <a href="mice.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>HEADSETS</h3>
            <img src="images-0/headsets1.jpg" alt="">
            <a href="headsets.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>KEYBOARDS</h3>
            <img src="images-0/keyboard1.webp" alt="">
            <br>
            <a href="keyboards.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>PC GAMING</h3>
            <img src="images-0/pc1.jpg" alt="">
            <a href="pcgaming.php" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">latest <span>products</span></h1>
    <!-- deal section starts  -->

<section class="deal" id="deal">

<div class="content">
    
    <div class="count-down">
        <div class="box">
            <h3 class="day">00</h3>
            <span>day</span>
        </div>
        <div class="box">
            <h3 class="hour">00</h3>
            <span>hour</span>
        </div>
        <div class="box">
            <h3 class="minute">00</h3>
            <span>minute</span>
        </div>
        <div class="box">
            <h3 class="second">00</h3>
            <span>second</span>
        </div>

 </section>

   <!-- deal section ends -->

    <div class="box-container">

            <?php
            include 'discounts.php';
            ?>

    </div>


</section>

<!-- product section ends -->

<!-- contact section starts  -->
<?php
    include 'contactus.php';
?>

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form method="post" name="myemailform" action="">

        <div class="inputBox">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="inputBox">
            <input type="number" min="0" max="9999999999" placeholder="Your number" name="number" required onkeypress="if(this.value.length == 10) return false;">
            <input type="text" placeholder="Subject" name="subject">
        </div>

        <textarea placeholder="Message" name="msg" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send" name="send" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter" style=" background-image:url('images-0/newsletter-bg.png')">


    <h3>subscribe us for latest updates</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<?php
include 'components/footer.php';
?>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="script-0.js"></script>
    
</body>
</html>