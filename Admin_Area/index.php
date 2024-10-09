<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../style.css">
     <!-- Font Awsome Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <style>
        .Admin_Image{
    width: 100px;
    object-fit: contain;
}

        .footer{
            position: absolute;
            bottom: 0;
        }
    </style>



</head>
<body>

<!-- navbar -->
    <div class="container-fluid p-0">
            <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../Images\abstract-modern-ecommerce-logo-ecommerce-logo-design-shop-logo-design-template-creative-ecommerce-logo-vector.png" alt="" class="logo">
                  <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="#" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                    
                  </nav>
            </div>
         </nav>


         <!-- Second Child -->
          <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
          </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../Images\pineapple-juice-500x449.jpg" alt="" class="Admin_Image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>

                <div class="button text-center">
                    <button class="my-3"><a href="Insert_Product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Oders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Last Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Log Out</a></button>
                </div>
            </div>
        </div>

        <!-- Fourth Child -->
         <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
            include('Insert_Categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('Insert_Brands.php');
            }

             ?>
         </div>


             <!-- Last Child (Footer) -->
      <div class="bg-info p-3 text-center footer">
     <p>Copyright &copy; 2024 by Kushan | All Rights Reserved.</p>
     </div>

    </div>
    



<!-- Bootstrap Javasricpt Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>