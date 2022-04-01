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

    <!-- ORDER FORM -->
    <div class="container bg-light" style="justify-items: center; margin:50px; padding:20px; border-radius: 20px; ">
      <h2 class="text-warning" style="margin-bottom: 20px">| Login</h2>
      <form action="signIn.php" method="post">
        
        <div class="mb-3" style="width:30%">
          <label for="email" class="form-label text-warning fw-bold">E-mail:</label>
          <input type="email" class="form-control" id="email" name="txtEmail">
        </div>

        <div class="mb-3" style="width:30%">
            <label for="password" class="form-label text-warning fw-bold">Password:</label>
            <input type="password" class="form-control" id="password" name="txtPassword">
        </div>

        <button type="submit" name="btnsubmit" class="btn btn-warning text-light fw-bold">Login</button>
        <a href="register.php" class="text-warning">Not registered yet?</a>


        <?php
				include("../db_config.php");
   				session_start();
		
				if(isset($_POST["btnsubmit"])){				
				$email = $_POST["txtEmail"];
				$pass =  $_POST["txtPassword"];
				
					
				$sql = "SELECT * FROM `member` WHERE `email`='".$email."' AND `pass`='".$pass."';";
				
				$results = mysqli_query($db,$sql);
										
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["member"] = $email;
					header('Location:member.php');
				}
				else
				{ 
					echo '<script>alert("Invalid Credentials! Try again")</script>';
				}
				}
		?>

      </form>
    </div>


</body>
</html>