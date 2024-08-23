<?php

    if(isset($_GET['delete_payments'])){
        $delete_id=$_GET['delete_payments'];
        // echo $delete_category;


        //delete query.........


        $delete_payments="Delete from `user_payments` where payment_id=$delete_id";
        $result=mysqli_query($con, $delete_payments);
        if($result){
            echo "<script>alert('Brands is been deleted successfully')</script>";
            echo "<script>window.open('./index.php?list_payments','_self')</script>";
        }
    }






?>