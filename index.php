<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kwenda traveling agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   $(document).ready(function(){
       $(".scroll-top").click(function() {
           $("html, body").animate({ 
               scrollTop: 0 
           }, "slow");
           return false;
       });
   });
</script>


    
</head>
<body>

<?php
include 'header.php';
?>

<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Explore with Us</span>
               <h3>A Boundless Universe</h3>
               <a href="itinerary.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Explore with Us</span>
               <h3>a new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Explore with Us</span>
               <h3>effective tour</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->

<!--service section starts here -->

<section class="services">
   <h1 class="heading-title">Our Travel Services</h1>
   <div class="box-container">
      <div class="box">
         <h3>Tour Packages</h3>
         <div class="paragraph">
         <p>Explore our diverse range of tour packages designed for every type of traveler.</p>
         </div>
      </div>
      <div class="box">
         <h3>Transfers</h3>
         <p>Seamless airport and local transfers to ensure a smooth travel experience.</p>
      </div>
      <div class="box">
         <h3>Educational Tours</h3>
         <p>Engaging educational tours that combine learning with adventure for students.</p>
      </div>
      <div class="box">
         <h3>Excursions</h3>
         <p>Unique excursions to local attractions and hidden gems in each destination.</p>
      </div>
      <div class="box">
         <h3>Visa Processing</h3>
         <p>Assistance with visa applications and documentation for hassle-free travel.</p>
      </div>
      <div class="box">
         <h3>Camping Adventures</h3>
         <p>Outdoor camping experiences for those who love nature and adventure.</p>
      </div>
      <div class="box">
         <h3>Travel Advisory</h3>
         <p>Expert travel advice to help you plan your perfect trip.</p>
      </div>
   </div>
</section>
<!-- services section ends -->

<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>About us</h3>
      <p> We are a Malawian owned Tour Operating Company run by a team of experienced tourism professionals who are so passionate about sustainability of nature-based tourism. We offer both inbound and outbound Tour packages which includes Safari, landscape, Cultural and environmental Educational Tours, and Hotel reservations. We also offer Airport and Hotel transfers and Visa processing for international travelers into Malawi. We are experts in advisory services regarding tourism.
Please shout out via various communication channels for Kwenda Explorers then you will get what you are looking for. Explore with Us.
.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->

<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Adventure Tourism</h3>
            <p>Expedition Tours: Trekking in remote areas, such as mountain climbing or jungle safaris.</p>
        
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
          
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Caltural Tourism</h3>
            <p>Historical Tours: Visits to ancient ruins, museums, and historical sites.</p>
          
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
         <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Eco-Tourism</h3>
            <p>Nature Reserves and National Parks: Guided tours through protected areas with a focus on ecology and conservation.</p>
           
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->

<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>16 Days of Malawi Exploration with Kwenda Explores</h3>
      <p>  Kwenda Explores welcomes you to  Malawi, the warm heart of Africa. This package is a reciepe for your unforgetable adventure as it has been put together 
         to fulfill your dreams though this an amazing journey filled with captivating sights, immersive experiences and unforgetable memories.
      </p>
      <a href="itinerary.php" class="btn">Read-More!</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +265 881 61 00 17 </a>
         <a href="#"> <i class="fas fa-phone"></i> +265 888 54 97 44</a>
         <a href="#"> <i class="fas fa-envelope"></i> info@Kwendaexplorers.com</a>
         <a href="#"> <i class="fas fa-map"></i> Lilongwe Malawi  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/kwenda-explorers-97905a331"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/profile.php?id=100083206966652"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.instagram.com/kwendaexplorers?utm_source=qr&igsh=MW43d2t4MmwwZ2NhdA=="> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Digital line technology</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>

    

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>