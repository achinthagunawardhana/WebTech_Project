<!-- Connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce web site</title>
    <!-- bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awsome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Link -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- nav bar -->
     <div class="container-fluid p-0">
        <!-- First Child (Header) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <!-- මෙතනට අපි ලෝගෝ ඒකක් දාන්න ඔීනෙ.. -->
    <img src="Images\abstract-modern-ecommerce-logo-ecommerce-logo-design-shop-logo-design-template-creative-ecommerce-logo-vector.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>
          <?php 
          cart_item();?>
          </sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price();?>/-</a>
        </li>
     </ul>
      <form class="d-flex" role="search"action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search"
         aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">

      </form>
    </div>
  </div>
     </div>

     <!-- calling cart function -->
     <?php
      cart();
      ?>

     <!-- Second Child -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
      
        <?php
        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest </a>
          </li>";
        } else {
          echo " <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']." </a>
          </li>";
        }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/user_login.php'>Login </a>
        </li>";
        }else{
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/logout.php'>Logout </a>
        </li>";
        }
        ?>
      </ul>
      </nav>

       <!-- Third Child -->
        <div class="bg light">
          <h3 class="text-center">Hidden Store</h3>
         <p class="text-center">Commmunicatios is at the heart of ecommerce</p>
        </div>

          <!-- Fouth Child -->
           <div class="row px-1">
            <div class="col-md-10">
            
  <!-- Products -->
  <div class="row">
  <!-- fetching products -->
  <?php
  //calling function
    view_details();
   get_unique_categories();
   get_unique_brands();
    ?>
  <!-- row ending -->
  </div>
  <!-- col ending -->
  </div>
           
            <!-- Side-Nav -->
             <div class="col-md-2 bg-secondary p-0">
              <!-- Brands To be Displayed -->
              <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"> <h4>Delivery Brands</h4></a>
                </li>

                <?php
getbrands();
                ?>
              
              </ul>

              <!-- categories To Be Displayed -->
              <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
                </li>

                <?php

getcategories();

                ?>
              </ul>
            
         
            
            </div>
          </div>
         

     <!-- Last Child (Footer) -->
     <!-- inlude footer -->
      <?php include("./includes/footer.php")?>
</div>
<!-- Bootstrap Javasricpt Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>