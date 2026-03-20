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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css linkage for the styles and designs  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>ABOUT US</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/ecommerce/logo.png" alt="" class="about_logo" >
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Why Choose AFFUL's Collections?<br>
1. Unique Designs: Discover exclusive, trendy pieces that stand out.<br>

2. High Quality: Enjoy premium fabrics and durable, comfortable clothing.<br>

3. Ethical Fashion: Shop with confidence knowing our practices are sustainable and ethical.<br>

4. Fast Shipping: Enjoy quick delivery and hassle-free returns.<br>

Join the AFFUL's Collections community and elevate your style with confidence. Thank you for choosing us!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/ME.JPG" alt="">
         <p>I am absolutely thrilled with my purchase from AFFUL's Collection.The quality of the products exceeded my expectations and the customer service was top-notch,highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>AFFUL PRINCE</h3> <br> <h3>BC-ITN-23-004</h3> 
      </div>

      <div class="box">
         <img src="images/linda.jpg" alt="">
         <p>From the moment I placed my order till the day it arrived at my doorstep,the entire experience with AFFUL's Collections was seamless,efficient and truly exceptional.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>LINDA OBIGYAN-YIE</h3> <br> <h3>BC-ITN-23-011</h3> 
      </div>

      <div class="box">
         <img src="images/caleb.jpg" alt="">
         <p>I was blown away by the attention to detail and the obvious care AFFUL's Collections puts into selecting and curating their products.It's clear that they are passionate about what they do.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>CALEB APPIAH </h3> <br> <h3>BC-ITN-23-020</h3> 
      </div>

      <div class="box">
         <img src="images/queen.jpg" alt="">
         <p>The product I received from AFFUL's Collections was even more beautiful than I anicipated and the price was incredibly reasonable considering the high quality and craftmanship.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> JULIET POURSON</h3> <br> <h3>BC-ITD-23-087</h3> 
      </div>

      <div class="box">
         <img src="images/kelvin.jpg" alt="">
         <p>I have never been one to write reviews but my experience with AFFUL's Collections was so outstanding that I felt compelled to share my enthusiasm with others,don't hesitate to shop here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>KEVIN WELSON</h3> <br> <h3>BC-ITS-23-008</h3> 
      </div>

      <div class="box">
         <img src="images/obrempong.jpg" alt="">
         <p>From the easy to navigate website to the prompt and friendly customer service,every aspect of my interaction with AFFUL's Collections was impressive and left me feeling like a value customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Tisbini Obrempong Frimpong 
         </h3> <br> <h3>BC-ITS-23-010</h3> 
      </div>

      <div class="box">
         <img src="images/savage.jpg" alt="">
         <p>From the easy to navigate website to the prompt and friendly customer service,every aspect of my interaction with AFFUL's Collections was impressive and left me feeling like a value customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> SAMUEL ARHTUR </h3> <br> <h3>BC-ITN-23-010</h3> 
      </div>

      <div class="box">
         <img src="images/obrempong.jpg" alt="">
         <p>From the easy to navigate website to the prompt and friendly customer service,every aspect of my interaction with AFFUL's Collections was impressive and left me feeling like a value customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Tisbini Obrempong Frimpong 
         </h3> <br> <h3>BC-ITS-23-010</h3> 
      </div>                      

      <div class="box">
         <img src="images/obrempong.jpg" alt="">
         <p>From the easy to navigate website to the prompt and friendly customer service,every aspect of my interaction with AFFUL's Collections was impressive and left me feeling like a value customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Tisbini Obrempong Frimpong 
         </h3> <br> <h3>BC-ITS-23-010</h3> 
      </div>   
   </div>

</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>