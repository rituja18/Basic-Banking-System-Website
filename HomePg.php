
<? php 
include "connection.php"
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
       <!--navibation bar-->
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand nav-style" href="#">THE SPARKS BANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="HomePg.php">Home</a>
                       <a class="nav-link" href="Customer_Info_pg2.php">View All Customers </a>
                    <a class="nav-link" href="transaction_table.php">Transaction History</a>
                    <a class="nav-link" href="#">Customer Support</a>

                </div>
            </div>
        </div>
    </nav>



     <!--corousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bank_corousel1.jpg" class="d-block w-100 h-100" alt="..." style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>THE SPARKS BANK</h5>
                    <p>Online banking has become easier now.You can track your account activity anytime, anywhere</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bank_corousel3.jpg" class="d-block w-100 h-100" alt="..." style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bill payments made easy.</h5>
                    <p>Now pay your bills in one click before your due date.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bank_corousel2.jpg" class="d-block w-100 h-100" alt="..." style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Transfer funds in a jiffy</h5>
                    <p>You can now transfer funds.Its 100% safe and secure</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

     <!--footer -->
    <footer class="text-center mt-3 py-2">
    <p>&copy May 2021. Made by <b>RITUJA METAR</b>
                        <br> Web development and design intern 
                        <br> The Sparks Foundation</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>
