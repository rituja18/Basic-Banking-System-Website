<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    .form-card{
    background-image:url("img/background2.jpg");
    border: 3px solid #D278FC;
    padding:10px;
             }

    .bg-container{
    background-image:url("img/background2.jpg");
    background-size:cover;
    font-family:"Sans-Serif";
   }

   .table-bordered{
    border-color: #D278FC;
    border-width:3px;
    padding:3px;
    }
    </style>

</head>
<body>
 <?php
include "connection.php";
?>
 <div class="bg-container">  
	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include "connection.php";
                $SrNo=$_GET["SrNo"];
                $mysqli = mysqli_connect("localhost", "root", "", "SparksCustomers");
                 $sql = "SELECT * FROM  sparks_customer_info WHERE SrNo=$SrNo";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($mysqli);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-bordered ">
                <tr>
                    <th class="text-center">Sr.No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Account No.</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows["SrNo"] ?></td>
                    <td class="py-2"><?php echo $rows["Name"] ?></td>
                    <td class="py-2"><?php echo $rows["AccNo"] ?></td>
                    <td class="py-2"><?php echo $rows["Email"] ?></td>
                    <td class="py-2"><?php echo $rows["Balance"] ?></td>
                </tr>
            </table>
            </div>
        </div>
        <br><br><br>
      
     <form action = "Transfer.php" method="post">    
     <div class="card form-card">  
        <div class="form-group row">
            
           
            <label for="To" class="col-sm-3 col-form-label">Name of thr beneficiary</label>
            <div class="col-sm-9">
            <select id="To", name="To" class="form-control"  required>
             
            <option value="" disabled selected>Name</option>
            <?php
                include 'connection.php';
                $SrNo=$_GET['SrNo'];
                $sql = "SELECT * FROM sparks_customer_info  where SrNo!=$SrNo";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['SrNo'];?>" >
                
                    <?php echo $rows['Name'] ;?>
               
                </option>
                <?php 
                } 
            ?>
           
        </select>
   </div>     
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-3 col-form-label">Amount to be transferred</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount(in Rupees)" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-3"> Are you sure you want to continue the transaction?</div>
    <div class="col-sm-9">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1 " required>
        <label class="form-check-label" for="gridCheck1">
        
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Transfer Now</button>
 
    </div>
  </div>
 </div>
</form>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

<?php
// obtaining the form responses 
include 'connection.php';

 
if(isset($_POST['submit']))
{
    $from = $_GET['SrNo'];
    $to = $_POST['To'];
    $amount = $_POST['amount'];
    
    $sql = "SELECT * from sparks_customer_info WHERE SrNo=$from";
    $result = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_assoc($result);   // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from sparks_customer_info WHERE SrNo=$to";
   $result = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_assoc($result);


    //  to check if amount is negative
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Check the amount you have entered. Negative amount cannot be transferred!!")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance in your account")';  // showing an alert box.
        echo '</script>';
    }
    


    // to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero amount cannot be transferred')";
         echo "</script>";
     }


    else {
        
                                                           // deducting amount from sender's account
                $NewBalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE sparks_customer_info 
                        SET balance=$NewBalance 
                        WHERE SrNo=$from";
                mysqli_query($con,$sql);
             

                 $NewBalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE sparks_customer_info 
                        SET balance=$NewBalance 
                        WHERE SrNo=$to";
                mysqli_query($con,$sql);                                           // adding amount to beneficiaries account
                
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
               echo $to;

              
                $sql = "INSERT INTO transactions(`From`, `To`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful;');
                                     window.location.transaction_table.php;
                           </script>";
                           
                    
                }

                $NewBalance= 0;
                $amount =0;
        }
    
}
?>