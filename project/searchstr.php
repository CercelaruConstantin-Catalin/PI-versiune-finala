<?php
if(isset($_POST['submit'])){
    $str=$_POST['caut'];
   $select_product = mysqli_query($conn, 
   "SELECT * FROM `headsets`
    WHERE name like '%$str%'
    UNION
    SELECT * FROM `MICE`
    WHERE name like '%$str%'
    UNION
    SELECT * FROM `PCGAMING`
    WHERE name like '%$str%'
    UNION
    SELECT * FROM `KEYBOARDS`
        WHERE name like '%$str%'
    ") or die('query failed');
    if(mysqli_num_rows($select_product) > 0){
        while($fetch_product = mysqli_fetch_assoc($select_product)){

    ?>
    <div class="box">
    <form method="post" action="">
        <img src="<?php echo $fetch_product['image']; ?>" alt="">
        <h3><div class="name"><?php echo $fetch_product['name']; ?></div></h3>
        <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        <div class="price"><?php echo $fetch_product['price']; ?> Lei<span></span></div>
        <div class="quantity">
        <span>quantity : </span>
        <input type="number" min="1" name="product_quantity" value="1">
        </div>
        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
    </div>
    </form>
    <?php
        };
    };
}

else{
    $select_product = mysqli_query($conn, 
    "SELECT * FROM `headsets`
     UNION
     SELECT * FROM `MICE`
     UNION
     SELECT * FROM `PCGAMING`
     UNION
     SELECT * FROM `KEYBOARDS`
     ") or die('query failed');
     if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
 
     ?>
     <div class="box">
     <form method="post" action="">
         <img src="<?php echo $fetch_product['image']; ?>" alt="">
         <h3><div class="name"><?php echo $fetch_product['name']; ?></div></h3>
         <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
         <div class="price"><?php echo $fetch_product['price']; ?> Lei<span></span></div>
         <div class="quantity">
         <span>quantity : </span>
         <input type="number" min="1" name="product_quantity" value="1">
         </div>
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </div>
     </form>
     <?php
         };
     };
}
?>
