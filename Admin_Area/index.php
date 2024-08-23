<!-- Connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    body{
        overflow-x: hidden;
    }

    .product_image{
        width: 100px;
        object-fit: contain;
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
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All Oders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">Last Users</a></button>
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

            if(isset($_GET['view_products'])){
                include('view_products.php');
            }

            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }

            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }

            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }

            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }

            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }

            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');
            }

            if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }

            if(isset($_GET['delete_brands'])){
                include('delete_brands.php');
            }

            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }

            if(isset($_GET['delete_order'])){
                include('delete_order.php');
            }

            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            
            if(isset($_GET['delete_payments'])){
                include('delete_payments.php');
            }

            if(isset($_GET['list_users'])){
                include('list_users.php');
            }





             ?>
         </div>

            <!-- Last Child (Footer) -->
  <!-- inlude footer -->
  <?php include("../includes/footer.php") ?>
             

    </div>
    
  


<!-- Bootstrap Javasricpt Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>