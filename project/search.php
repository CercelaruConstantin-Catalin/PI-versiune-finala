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

<h1 class="heading">Search <span>here</span></h1>

<form method="post">
    <div class="search">
        <input type="text" name="caut" id="search-box" placeholder="search here...">
        <button class="fas fa-search" name="submit"></button>
    </div>
</form>

<section class="product" id="product">
    <div class="box-container">

        <?php
        include 'searchstr.php';
        ?>

        </div>
    </div>
</section>

<?php
include 'components/footer.php';
?>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="script-0.js"></script>
    
</body>
</html>