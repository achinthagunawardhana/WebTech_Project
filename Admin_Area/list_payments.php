<h3 class="text-center text-success">All Payments</h3>

<table class="table table-bordered mt-5">
    <thaed class="bg-info text-center" >
        
            <?php
$get_payments="Select * from `user_payments`";
$result=mysqli_query($con, $get_payments);
$row_count=mysqli_num_rows($result);


    if($row_count==0){
        echo"<h2 class='text-danger text-center mt-5'>No Payments Yet</h2>";
    }

    else{

        echo "        <tr class='text-center'>
            <th>Si. No.</th>
            <th>Invoice Number</th>
            <th>Amount</th>
            <th>Payment Mode</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
    </thaed>

    <tbody  class='text-center'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $payment_id=$row_data['payment_id'];
            $invoice_number=$row_data['invoice_number'];
            $amount=$row_data['amount'];
            $payment_mode=$row_data['payment_mode'];
            $date=$row_data['date'];
            $number++;

            echo "        <tr>
            <td>$number</td>
            <td>$invoice_number</td>
            <td>$amount</td>
            <td>$payment_mode</td>
            <td>$date</td>
            <td><a href='index.php?delete_payments=<?php echo $payment_id?>' type='button' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
        }
    }



?>


    </tbody>
</table>