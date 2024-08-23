<?php
include('../includes/connect.php');
if(isset($_POST['Insert_Products'])){
    $product_title=$_POST['product_title'];
    $Description=$_POST['Description'];
    $Product_Keywords=$_POST['Product_Keywords'];
    $Product_Category=$_POST['Product_Category'];
    $Product_Brands=$_POST['Product_Brands'];
    $Product_Price=$_POST['Product_Price'];
    $Product_status='true';

    //accessing images
    $Product_Image1=$_FILES['Product_Image1']['name'];
    $Product_Image2=$_FILES['Product_Image2']['name'];
    $Product_Image3=$_FILES['Product_Image3']['name'];

    //accessing img tmp name
    $temp_Image1=$_FILES['Product_Image1']['tmp_name']; 
    $temp_Image2=$_FILES['Product_Image2']['tmp_name'];
    $temp_Image3=$_FILES['Product_Image3']['tmp_name'];

    //checking empty condition
    if( $product_title=='' or  $Description=='' or  $Product_Keywords=='' or $Product_Category=='' or
    $Product_Brands=='' or  $Product_Price=='' or $Product_Image1=='' or $Product_Image2=='' or
    $Product_Image3==''){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_Image1,"./product_images/$Product_Image1");
        move_uploaded_file($temp_Image2,"./product_images/$Product_Image2");
        move_uploaded_file($temp_Image3,"./product_images/$Product_Image3");

        //insert query
        $insert_Products="insert into `products` (product_title,product_description,product_keywords,category_id,
        brand_id,product_image1,product_image2,product_image3,product_price,date,status) values
         ('$product_title','$Description','$Product_Keywords','$Product_Category','$Product_Brands',
         '$Product_Image1','$Product_Image2','$Product_Image3','$Product_Price',NOW(),'$Product_status')";
         $result_query=mysqli_query($con,$insert_Products);
         if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
         }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_Products-Admin Dashboard</title>
     <!-- Bootstrap CSS Link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../style.css">
     <!-- Font Awsome Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body class="bg-loght">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- FORM -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title </label>
                    <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">

            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label">Product Description </label>
                    <input type="text" name="Description" id="Description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
                    
            </div>
             <!-- Keywords -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Keywords" class="form-label">Product Keywords </label>
                    <input type="text" name="Product_Keywords" id="Product_Keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required="required">
                    
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="Product_Category" id="" class="form-select">
                    <option value="">Select a category</option>
                    <?php
                    $select_query="Select * from categories";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                     ?>
                </select>

            </div>   
                    
                <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="Product_Brands" id="" class="form-select">
                <option value="">Select a Brand</option>
                <?php
                    $select_query="Select * from brands";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                     ?>
                </select>
            </div>

             <!-- Image 1 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Image1" class="form-label">Product Image 1 </label>
                    <input type="file" name="Product_Image1" id="Product_Image1" class="form-control" required="required">
            </div>
            <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Image2" class="form-label">Product Image 2 </label>
                    <input type="file" name="Product_Image2" id="Product_Image2" class="form-control" required="required">
            </div>
            <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Image3" class="form-label">Product Image 3 </label>
                    <input type="file" name="Product_Image3" id="Product_Image3" class="form-control" required="required">
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Price" class="form-label">Product Price </label>
                    <input type="text" name="Product_Price" id="Product_Price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="Insert_Products" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>


            
         </form>
    </div>
    
</body>
</html>