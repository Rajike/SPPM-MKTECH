<?php
session_start();
require_once '../db_config.php';
if(!isset($_SESSION["admin"]))
{
    header('Location:admin.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Monochrome Kodak</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap-icons.css">

</head>

<body>
     <!--NAV BAR-->
     <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <a class="navbar-brand" href="#"><span class="text-warning">Monochrome</span> Kodak</a>
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="../products.html">Products</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active text-warning" href="adminDashboard.php">Dash Board</a>
            </li>
          <div class="d-flex">
            <a href="../order.php"><button type="button" class="btn btn-warning text-light" style="margin-left: 10px;">Order Now</button></a>
          </div>
        </ul>
      </div>
  </nav>

    <!-- ORDER FORM -->
    <div class="container bg-dark" style="display:flex; justify-content: center; margin:50px; padding:20px; border-radius: 20px;">

        <a href="adminOrders.php"><button class="btn btn-warning text-dark fw-bold" style="margin: 5px;"><img src="../images/image-gallery (1).png" alt="Order View" style="width:50px; margin:5px">  Order View</button></a>
        <a href="adminMembers.php"><button class="btn btn-warning text-dark fw-bold" style="margin: 5px;"><img src="../images/user.png" alt="Order View" style="width:50px; margin:5px;">  View Members</button></a>
        <a href="logout.php"><button class="btn btn-warning text-dark fw-bold" style="margin: 5px;"><img src="../images/logout.png" alt="Order View" style="width:50px; margin:5px;">  Sign Out</button></a>

    </div>


</body>
</html>