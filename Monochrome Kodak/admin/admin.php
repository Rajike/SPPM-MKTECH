<!DOCTYPE html>
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
                <a class="nav-link active text-warning" href="adminDashboard.html">Dash Board</a>
              </li>
            <div class="d-flex">
              <a href="../order.html"><button type="button" class="btn btn-warning text-light" style="margin-left: 10px;">Order Now</button></a>
            </div>
          </ul>
        </div>
    </nav>

    <!-- ORDER FORM -->
    <div class="container bg-light" style=" margin: 50px; padding:20px; border-radius: 20px;">
    <h2 class="text-warning" style="margin-bottom: 20px">| Admin Login</h2>
    <form action="admin.php" method="post">
        
        <div class="mb-3" style="width:30%">
          <label for="email" class="form-label text-dark fw-bold">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="password" class="form-label text-dark fw-bold">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" name="btnSubmit"  class="btn btn-warning text-light fw-bold">Login</button>
        <?php
        include("../db_config.php");
        session_start();
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
           
           
           $name = mysqli_real_escape_string($db,$_POST['name']);
           $password = mysqli_real_escape_string($db,$_POST['password']); 
           
           $sql = "SELECT * FROM `admin` WHERE `name`='".$name."' AND `password`='".$password."';";
           $result = mysqli_query($db,$sql);
           $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           
           
           $count = mysqli_num_rows($result);
           
           
         
           if($count == 1) {
              
              $_SESSION['admin'] = $name;
              
              header("location:adminDashboard.php");
           }else {
              echo '<script>alert("Invalid Credentials! Try again")</script>';
           }
        }
     ?>
      </form>
    </div>


</body>
</html>