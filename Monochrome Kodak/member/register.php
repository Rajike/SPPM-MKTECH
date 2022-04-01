
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
    <nav class="navbar sticky-top navbar-expand-sm bg-light navbar-light">
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
                <a class="nav-link active text-warning" href="member.php">Member</a>
              </li>
            <div class="d-flex">
              <a href="../order.php"><button type="button" class="btn btn-warning text-light" style="margin-left: 10px;">Order Now</button></a>
            </div>
          </ul>
        </div>
    </nav>

    <!-- Register FORM -->
    <div class="container bg-light" style="justify-items: center; margin: 50px; padding:20px; border-radius: 20px;">
      <h2 class="text-warning" style="margin-bottom: 20px">| Registration</h2>
      <form action="register.php" method="post">
        
        <div class="mb-3" style="width:30%">
          <label for="email" class="form-label text-warning fw-bold">E-mail:</label>
          <input type="email" class="form-control" name="email" id="email" required="required" placeholder="E-mail">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="fname" class="form-label text-warning fw-bold">Full Name:</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="password" class="form-label text-warning fw-bold">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Password">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="phone" class="form-label text-warning fw-bold">Mobile Number:</label>
            <input type="number" class="form-control" id="phone" name="phone" required="required"  min="10" placeholder="07XXXXXXXX">
        </div>
  
        <div class="mb-3" style="width:30%">
              <label for="Address" class="form-label text-warning fw-bold">Address:</label>
              <input type="text" class="form-control" id="add" name="add" required="required" placeholder="Address Line">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="city" class="form-label text-warning fw-bold">City:</label>
            <input type="text" class="form-control" id="city" name="city" required="required" pattern="[a-zA-Z\s]+" placeholder="City">
        </div>

        <div class="mb-3" style="width:30%">
          <label for="Zip" class="form-label text-warning fw-bold">Zip:</label>
          <input type="number" class="form-control" id="zip" name="zip" required="required" placeholder="Zip">
      </div>

        <button type="submit" name="sbutton" class="btn btn-warning text-light fw-bold">Register</button>

        <?php   
		
        include("../db_config.php");
     
        if(isset($_POST["sbutton"]))
        {
          $name = $_POST["fname"];
          $email = $_POST["email"];
          $pass = $_POST["password"];
          $phone = $_POST["phone"];
          $add = $_POST["add"];
          $city = $_POST["city"];
          $zip = $_POST["zip"];
          
        
          
          $sql= "INSERT INTO `member` (`id`, `name`, `email`, `phone`, `pass`, `address`, `city`, `zip`) VALUES (NULL, '$name', '$email', '$phone', '$pass', '$add', '$city', '$zip');";
          if (mysqli_query($db,$sql)){
              mysqli_close($db);
              header('Location:member.php');
          }
      
        }
        
    
    ?>
      </form>
    </div>


</body>
</html>