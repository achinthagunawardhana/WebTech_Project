<?php

    if(isset($_GET['delete_order'])){
        $delete_id=$_GET['delete_order'];
        // echo $delete_category;


        //delete query.........


        $delete_orders="Delete from `user_orders` where order_id=$delete_id";
        $result=mysqli_query($con, $delete_orders);
        if($result){
            echo "<script>alert('Brands is been deleted successfully')</script>";
            echo "<script>window.open('./index.php?delete_order','_self')</script>";
        }
    }






?>