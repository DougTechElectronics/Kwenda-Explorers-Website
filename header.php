<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Destination Management Company : Explore with US</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function() {
          $("#menu-btn").click(function() {
              $(".navbar").toggleClass("active");
          });
      });
   </script>
   <style>
      .header {
         display: flex;
         align-items: center;
         justify-content: space-between; /* Distribute space */
         padding: 10px; /* Padding for spacing */
         background-color: white; /* Example backgroud color*/
      }

      .header .logo {
         display: flex;
         align-items: center;
      }

      .logo-image {
         height: 50px; /* Adjust the logo image size */
         margin-right: 10px; /* Reduced space between text and image */
      }

      .header h3 {
         font-size: 2.5rem; /* Increased font size */
         margin-left: -90px; /* Remove default margin */
         font-weight: 50%;
      }

      .navbar {
         display: flex;
         align-items: center;
      }

      #menu-btn {
         cursor: pointer; /* Change cursor to indicate it's clickable */
         display: none;
      }

      @media (max-width: 768px) {
         #menu-btn {
            display: block; /* Show menu button on mobile */
         }
         .navbar {
            display: none; /* Hide navbar links on mobile */
            flex-direction: column;
            width: 100%; /* Full width */
         }
         .navbar.active {
            display: flex; /* Show navbar links when active */
         }
         .navbar a {
            padding: 10px; /* Padding for clickable area */
            text-align: center; /* Center align links */
            border-top: 1px solid #ccc; /* Optional: border for separation */
         }
      }
   </style>
</head>
<body>
<section class="header">
   <a href="home.php" class="logo"> 
      <img src="images/logo.png" alt="Kwenda Explorers Logo" class="logo-image">
      <h3>Kwenda Explorers</h3>
   </a>
   <nav class="navbar">
      <a href="index.php" class="active">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="itinerary.php">Itineraries</a>
      <a href="book.php">Book</a>
   </nav>
   <div id="menu-btn">☰</div> <!-- Toggle button icon -->
</section>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
