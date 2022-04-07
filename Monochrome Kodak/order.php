<?php
session_start();
require_once 'db_config.php';
if(!isset($_SESSION["member"]))
{
    header('Location:member/signIn.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Monochrome Kodak</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <script src="js/order.js"></script>

</head>

<body>
     <!--NAV BAR-->
    <nav class="navbar sticky-top navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <a class="navbar-brand" href="#"><span class="text-warning">Monochrome</span> Kodak</a>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="member/member.php">Member</a>
              </li>
            <div class="d-flex">
              <a href="#"><button type="button" class="btn btn-warning text-light" style="margin-left: 10px;">Order Now</button></a>
            </div>
          </ul>
        </div>
    </nav>

    <!-- ORDER FORM -->
    <div class="container bg-light" style="margin: 50px; padding:20px; border-radius: 20px;">
      <h2 class="text-warning" style="margin-bottom: 20px">| Place Order</h2>
    <form action="order.php" method="post" enctype="multipart/form-data">

        <div class="mb-3" style="width:30%">
            <label for="User" class="form-label text-warning fw-bold">User</label>
            <input type="text" class="form-control" id="buyer" rows="3" name="buyer" id="buyer" value="<?php echo $_SESSION["member"]?>" readonly />
        </div>
        
        <div class="mb-3" style="width:30%">
          <label for="print" class="form-label text-warning fw-bold">Print Size:</label>
          <select class="form-select" id="size" name="size">
            <option value="4x6">4" X 6"</option>
            <option value="5x7">5" X 7"</option>
            <option value="8x10">8" X 10"</option>
            <option value="8.5x11">8.5" X 11"</option>
            <option value="12x18">12" X 18"</option>
            <option value="18x24">18" X 24"</option>
            <option value="24x36">24" X 36"</option>
          </select>
        </div>
        
        <div class="mb-3" style="width:30%">
          <label for="frame" class="form-label text-warning fw-bold">Frame:</label>
          <select class="form-select" id="frame" name="frame">
            <option value="none">none</option>
            <option value="black">Black</option>
            <option value="brown">Brown</option>
            <option value="white">White</option>
            <option value="borderless">Borderless</option>
          </select>
        </div>

        <div class="mb-3" style="width:30%">
            <label for="photo" class="form-label text-warning fw-bold" >Photo(s)</label>
            <input class="form-control" type="file" id="fileImage" name="fileImage" accept="image/*" >
        </div>

        <div class="mb-3" style="width:30%">
            <label for="instructions" class="form-label text-warning fw-bold">Other Instructions</label>
            <input type="text" class="form-control" id="instructions" rows="3" name="instructions">
        </div>

        <hr style="width: 30%;">
        
        <div class="mb-3" style=" display:flex; flex-direction:column; justify-content:center; margin-top: 20px; width: 30%;">
          <h4 style="color: rgb(129, 129, 129);">Total Cost: </h2>
          <input class="text-warning" type="text" id="price" name="price" readonly>
      </div>

        <input type="submit" id="btnSubmit" name="btnSubmit" value="Place Order" class="btn btn-warning text-light fw-bold">

        <?php
        if(isset($_POST["btnSubmit"]))
        {
          $size = $_POST["size"];
          $instructions = $_POST["instructions"];
          $frame = $_POST["frame"];
          $status = "Processing";
          $buyer = $_POST["buyer"];
          $image = "uploads/".basename($_FILES["fileImage"]["name"]);
          $price = $_POST["price"];
		    move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
        
          
        
          $sql = "INSERT INTO `orders` (`id`, `size`, `frame`, `image`, `instructions`, `price`, `buyer`, `status`) VALUES (NULL, '$size', '$frame', '$image', '$instructions', '$price', '$buyer', '$status')";
         
          
          if(  mysqli_query($db,$sql))
          {
            echo "Order Placed!";
          }
          else
            echo "Something went wrong, Try again";
          }
          
        ?>

      </form>

    </div>


</body>
</html>