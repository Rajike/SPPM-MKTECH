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

        <h1 class="col-3 text-warning">| Update Order</h1> 
    </div>
    <form method="post" enctype="multipart/form-data">
    <div class="container bg-light" style="margin: 50px; padding:20px; border-radius: 20px;">
      <h2 class="text-warning" style="margin-bottom: 20px">| Place Order</h2>
    <form action="adminOrderUpdate.php?id=<?php echo $_GET['id'];?>" method="post" >

    
		
    <?php
		
		$sql ="SELECT * FROM `orders` WHERE `id`='".$_GET['id']."'";	
		$image="";		
		$result = mysqli_query($db,$sql);
		if(mysqli_num_rows($result)> 0)
		{
			
			$row = mysqli_fetch_assoc($result);
			$status  = $row['status'];	
		?>
        
        
        <div class="mb-3" style="width:30%">
          <label for="Order Status" class="form-label text-warning fw-bold">Order Status</label>
          <select class="form-select" id="status" name="status">
            <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
            <option value="processing">Processing</option>
            <option value="Accepted">Accepted</option>
    			  <option value="Declined">Declined</option>
			      <option value="Completed">Completed</option>
          </select>
        </div>
        

        <div class="mb-3" style="width:30%">
            <label for="instructions" class="form-label text-warning fw-bold">Sellers Message</label>
            <input type="text" class="form-control" id="sm" name="sm" value= "<?php echo $row['sm'];?>">
        </div>

        <hr style="width: 30%;">
        
        <?php
		    	if(isset($_POST["btnSubmit"]))
		    	{
			    	$status = $_POST["status"];
            $sm = $_POST["sm"];
				
				
		      	$sql = "UPDATE `orders` SET `status` = '".$status."', `sm` = '".$sm."' WHERE `orders`.`id` = ".$_GET['id'].";";
	   
		    	if(  mysqli_query($db,$sql))
			    {
				  	echo "Status Updated";
			    }
				  else
			
					echo "Something went wrong, Try again";
		      }
			
			
			?>

          
      <input type="submit" id="btnSubmit" name="btnSubmit" value="Update Order" class="btn btn-warning text-light fw-bold">
        <?php }
        ?>
      </form>
</body>
</html>