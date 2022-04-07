<?php
session_start();
require_once '../db_config.php';
if(!isset($_SESSION["admin"]))
{
    header('Location:login.php');
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
<table align="center">
		<tr>
			<td colspan="2"><a href="dash.php"><img src="../images/logo.png" width="170" height="75" alt=""/></a></td>
			<td height="150"></td>
		</tr>
</table>
<form method="post" enctype="multipart/form-data">
<table width="550" border="0" align="center">
      <tr>
        <td>
          <h1 align="center">Admin Dashboard</h1>
		</td>
	  </tr>
      <tr>
		
		<?php
		
		$sql ="SELECT * FROM `product` WHERE `id`='".$_GET['id']."'";	
		$image="";		
		$result = mysqli_query($db,$sql);
		if(mysqli_num_rows($result)> 0)
		{
			
			$row = mysqli_fetch_assoc($result);
			$image  = $row['image'];	
		?>
      <td colspan="2"><form action="edit product.php?id=<?php echo $_GET['id'];?>"  method="post" enctype="multipart/form-data">
        ;
        <table width="438" border="0" align="center">
          <tr>
            <td height="106" colspan="2"><div align="center">
              <h1 align="center">Edit Product - <?php echo $row['name'];?></h1></td>
          </tr>
          <tr>
            <td width="146">Name</td>
            <td width="282"><input type="text" name="txtName" id="txtName" value= "<?php echo $row['name'];?>"/></td>
          </tr>
		  <tr>
            <td width="146">Price</td>
            <td width="282"><input type="text" name="txtPrice" id="txtPrice" value= "<?php echo $row['price'];?>"/></td>
          </tr>
          <tr>
            <td>Images</td>
            <td><input type="file" name="fileImage" id="fileImage" /></td>
          </tr>
          <tr>
            <td>Description</td>
            <td><input type="text" name="txtDescription" id="txtDescription" value="<?php echo $row['description'];?>"/></td>
          </tr>
          <tr>
        <td>Type</td>
        <td>
  			<select id="type" name="type">
    			<option value="frame">Frame</option>
    			<option value="lens">Lens</option>
  			</select>
		</td>
        </tr>
	
				  
				  <?php
			if(isset($_POST["btnSubmit"]))
			{
				$name = $_POST["txtName"];
				$description = $_POST["txtDescription"];
				$price = $_POST["txtPrice"];
				$type = $_POST["type"];
				$image = "../uploads/".basename($_FILES["fileImage"]["name"]);
				move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
			
				
				
			$sql = "UPDATE `product` SET `name` = '".$name."', `description` = '".$description."', `image` = '".$image."', `type` = '".$type."' WHERE `product`.`id` = ".$_GET['id'].";";
	   
			if(  mysqli_query($db,$sql))
			{
					echo "Product Updated";
			}
				else
			
					echo "Something went wrong, Try again";
			}
			
			
			?>
 
          <tr>
            <td colspan="2"><blockquote> 
              <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"/>
            </td>
			  
			  <?php }
		?>
          </tr>
        </table>
      </form></td>
    </tr>
</table>
</form>
</body>
</html>