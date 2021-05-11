
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">

    <style>
    .bg-container{
    background-image:url("img/background2.jpg");
    background-size: auto;
    }
    .table-bordered {
    border-color: #D278FC;
    border-width:3px;
    padding:3px;
}
    </style>
</head>


<body>
     <!--Customer information table -->
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM Sparks_Customer_Info";
    $result = mysqli_query($con,$sql);
    ?>
    <div class="bg-container">
    <div class="row justify-content-center">
    <div class="col-auto">
    <h1 style="text-align:center">Customer Summary</h1>
    <div class="table-responsive-sm" style="text-align:center">
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">IFSC Code</th>
                <th scope="col">Account Number</th>
                 <th scope="col">Operation</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($rows=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td class="py-2"><?php echo $rows['SrNo'] ?></td>
                <td class="py-2"><?php echo $rows['Name'] ?></td>
                <td class="py-2"><?php echo $rows['Email']?></td>
                <td class="py-2"><?php echo $rows['IFSCCode']?></td>
                <td class="py-2"><?php echo $rows['AccNo']?></td>
               
                <td><a href="Transfer.php?SrNo= <?php echo $rows['SrNo'] ;?>"> <button type="button" class="btn btn-outline-primary">Transact</button></a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
        </div>
        </div>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</table>
</body>
</html>
