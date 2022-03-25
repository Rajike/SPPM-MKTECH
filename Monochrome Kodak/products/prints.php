<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lenses</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>
<table id="header">
		<tbody>
		<tr>
			<td colspan="2"><img src="../images/logo.png" width="170" height="75" alt=""/></td>
			<td width="350"></td>
      		<td width="550">
				<ul>
        			<li><a href="../index.php">Home</a></li>
        			<li><a href="../products.php">Products</a></li>
        			<li><a href="../contact us.html">Contact Us</a></li>
        			<li><a href="../about us.html">About Us</a></li>
					<li><a href="../member/dash.php">Member</a></li>
      			</ul>
			</td>
		</tr>
  </tbody>
	</table>
	<table align="center">
		<tr>
			<td height="50"></td>
		</tr>
		<tr>
			<td width="800" colspan="2">
				<h1>Prints</h1>
			</td>
	  	</tr>
		<tr>
      	<td colspan="2"><form action="" method="post">;
        <table align="center" width="800">
          <tr>
            <td colspan="2" bgcolor="#FFFFFF">
              
				
            <?php 
			include_once('../db_config.php');	
			$sql ="SELECT * FROM `product` WHERE `type` = 'lens'";	
					
			$result = mysqli_query($db,$sql);
			
			if(mysqli_num_rows($result)> 0)
			{
					while($row = mysqli_fetch_assoc($result))
					{
				?>
				
              			<div class="image"><a href="<?php echo $row['image']?>">
				  		<img src="<?php echo $row['image']?>" width="397" height="151"></im></a>
						<div class="info">
						<?php echo $row["name"]."<br> <br>RS - ".$row["price"]."<br><br>".$row["description"]?><br><br>
						<a href="buy.php?id=<?php echo $row['id']; ?>">BUY</a>
						</div>
						</div>
						<?php
					}
			}
						mysqli_close($db);
						?>
				
			
			  
			  </td>
          </tr>
          <tr>
            
          </tr>
	
	</table>
	
</body>
</html>
