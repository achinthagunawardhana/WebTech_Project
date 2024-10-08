<!-- Connect file -->
<?php
include('../includes/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce web site - checkout page </title>
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
        
     </ul>
      <form class="d-flex" role="search"action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search"
         aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">

      </form>
    </div>
  </div>
     </div>


     <!-- Second Child -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log in </a>
        </li>
      </ul>
      </nav>

       <!-- Third Child -->
        <div class="bg light">
          <h3 class="text-center">Hidden Store</h3>
         <p class="text-center">Commmunicatios is at the heart of ecommerce</p>
        </div>

          <!-- Fouth Child -->
           <div class="row px-1">
            <div class="col-md-12">
            
  <!-- Products -->
  <div class="row">
        <?php
        if(!isset($_SESSION['username'])){
include('user_login.php');
        }else{
            include('payment.php');
        }
        ?>
  
  <!-- row ending -->
  </div>
  <!-- col ending -->
  </div>
           
 </div>        

                

         

     <!-- Last Child (Footer) -->
     <!-- inlude footer -->
      <?php include("../includes/footer.php")?>
</div>
<!-- Bootstrap Javasricpt Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>