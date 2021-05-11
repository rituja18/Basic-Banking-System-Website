<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css"> 
    <style>
    .bg-container{
    background-image:url("img/background2.jpg");
    background-width:100vw;
    background-height:100vh;

    }
    .table-bordered {
    border-color: #D278FC;
    border-width:2px;
}
    </style> 
</head>


<body>
<div class="bg-container">
	<div class="container">
        <h2 class="text-center pt-4">Transaction History </h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sr.No</th>
                <th class="text-center">From</th>
                <th class="text-center">To</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connection.php';
           
            $sql ="SELECT * from transactions";
            $query =mysqli_query($con, $sql);
           
            while($rows = mysqli_fetch_assoc($query))
            {          
        ?>

            <tr>
            <td class="py-2"><?php echo $rows["SrNo"]; ?></td>
            <td class="py-2"><?php echo $rows['From']; ?></td>
            <td class="py-2"><?php echo $rows['To']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['DateTime']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>