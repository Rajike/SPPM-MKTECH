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

    <div class="row container bg-dark" style="margin: 50px; padding:20px; border-radius: 20px;">

        <h1 class="col-3 text-warning">| Order View</h1> 

        <div class="col-9" style=" display:flex; justify-content: flex-end;">
            <button class="btn btn-warning text-light" onclick="window.location.href = 'adminOrders.php';" style="margin: 5px;">All Orders</button>
            <button class="btn btn-warning text-light" onclick="window.location.href = 'accepted.php';" style="margin: 5px;">Accepted</button>
            <button class="btn btn-warning text-light" onclick="window.location.href = 'declined.php';" style="margin: 5px;">Declined</button>
            <button class="btn btn-warning text-light" onclick="window.location.href = 'completed.php';" style="margin: 5px;">Completed</button>
        </div>

    </div>

    <div class="row container bg-dark" style="margin: 50px; padding:20px; border-radius: 20px;">

      <h1 class="col-3 text-warning">| Declined</h1> 
      <table align="center">
                  
                  <tr align="center" >
                      <td width="100" bgcolor="#0084FF">Order Id</td>
                      <td width="350" bgcolor="#0084FF">Buyer</td>
                      <td width="100" bgcolor="#0084FF">Size</td>
                      <td width="250" bgcolor="#0084FF">Frame</td>
                      <td width="200" bgcolor="#0084FF">Instructions</td>
                      <td width="100" bgcolor="#0084FF">Price</td>
                      <td width="200" bgcolor="#0084FF">Status</td>
                      <td width="300" bgcolor="#0084FF">SM</td>
                      <td width="100" bgcolor="#0084FF"></td>
                  </tr>
         </table>
      <?php 
				
      $sql ="SELECT * FROM `orders` WHERE `status` = 'declined' ";	
              
      $result = mysqli_query($db,$sql);
      if(mysqli_num_rows($result)> 0)
      {
          while($row = mysqli_fetch_assoc($result))
          {
                              
              ?>
              

                <table align="center">
                  <tr><td height="10"></td></tr>
                    <tr color="white">
                        <td width="100"><?php echo $row['id']; ?></td>
                        <td width="350"><?php echo $row['buyer']; ?></td>
                        <td width="100"><?php echo $row['size']; ?></td>
                        <td width="250"><?php echo $row['frame']; ?></td>
                        <td width="200"><?php echo $row['instructions']; ?></td>
                        <td width="100"><?php echo $row['price']; ?></td>
                        <td width="200"><?php echo $row['status']; ?></td>
                        <td width="300"><?php echo $row['sm']; ?></td>
                        <td width="100"><a href="adminOrderUpdate.php?id=<?php echo $row['id']; ?>">Update</a></td>
                  </tr>
                  <tr height="10">
                </table>
            
              <?php
          }
      }
              mysqli_close($db);
              ?>
    
    <?php
			if(isset($_POST["ubutton"]))
			{
				$status = $_POST["status"];
				
			  $sql = "UPDATE `orders` SET `name` = '".$name."' WHERE `orders`.`id` = ".$row['id'].";";
	   
			if(  mysqli_query($db,$sql))
			{
					echo "Order Updated";
			}
				else
			
					echo "Something went wrong, Try again";
			}
			
			
		?>

</body>
</html>