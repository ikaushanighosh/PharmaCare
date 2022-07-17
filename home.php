<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PharmaCare</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="prescription.jpg" alt="">
         </div>
         <div class="content">
         <span></span>
            <h3>PharmaCare </h3>
            <h1>Your One Stop Solution To Pharmacy & HealthCare </h1>
            <a href="pres.php" class="btn"><h1>shop by prescription</h1></a>
                     </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="med1.jpg" alt="">
         </div>
         <div class="content">
         <span></span>
            <h3>Authenticated & Certified Products</h3>
            <a href="shop.php" class="btn"><h1>shop now</h1></a>
            
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="https://www.irishtimes.com/polopoly_fs/1.4808216.1645470960!/image/image.jpg_gen/derivatives/ratio_1x1_w1200/image.jpg" alt="">
         </div>
         <div class="content">
            <span></span>
            <h3>Best Products At Best Prices</h3>
            <a href="shop.php" class="btn"><h1>shop now</h1></a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="pres.php" class="swiper-slide slide">
      <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG1lZGljaW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
      <h3>RX Drugs</h3>
   </a>

   <a href="category.php?category=Fitness" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/0670da2370553283abea292910adc473.png" alt="">
      <h3>Fitness</h3>
   </a>

   <a href="category.php?category=CovidEssentials" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/0193fd80acd733bca44ea1fc3bfd74b3.jpg" alt="">
      <h3>Covid Essentials</h3>
   </a>

   <a href="category.php?category=HealthCondition" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/4a3252df55f63750b61220c4d10483dd.png" alt="">
      <h3>Health Conditions</h3>
   </a>

   <a href="category.php?category=BabyCare" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/b334c54f69763e129b4cc265de5d74a3.jpg" alt="">
      <h3>Baby Care</h3>
   </a>

   <a href="category.php?category=PersonalCare" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/1279753fc985369b8a8a5069f7fbe209.jpg" alt="">
      <h3>Personal Care</h3>
   </a>

   <a href="category.php?category=SurgicalsandDressings" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/e63d776d17433b73ab220cb1d6e8ae19.jpg" alt="">
      <h3>Dressings</h3>
   </a>

   <a href="category.php?category=HealthFoodandDrinks" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/b8832bde65de3cafbd8a84861b9b9d1d.jpg" alt="">
      <h3>Health Food</h3>
   </a>

   <a href="category.php?category=SkinCare" class="swiper-slide slide">
      <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/7542b703128c332b89d2bae5f4251af8?dim=100x0&dpr=1.2799999713897705&q=100" alt="">
      <h3>Skin Care</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs. </span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>