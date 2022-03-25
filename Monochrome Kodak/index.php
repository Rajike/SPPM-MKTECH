<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Monochrome Kodak</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<table id="header">
		<tbody>
		<tr>
			<td colspan="2"><img src="images/logo.png" width="170" height="75" alt=""/></td>
			<td width="350"></td>
      		<td width="550">
				<ul>
        			<li><a href="index.php">Home</a></li>
        			<li><a href="products.php">Products</a></li>
        			<li><a href="contact us.html">Contact Us</a></li>
        			<li><a href="about us.html">About Us</a></li>
					<li><a href="member/dash.php">Member</a></li>
      			</ul>
			</td>
		</tr>
  </tbody>
	</table>
	<table>
		<tr>
			<td height="50"></td>
		</tr>
		<tr>
			<td width="1366">
				<h1>Welcome to Monochrome Kodak!</h1>
			</td>
	  	</tr>
		<tr>
			<td height="50"></td>
		</tr>
		<tr>
			<td width="800" height="400">
				<div class="slideshow-container">
					
					<div class="mySlides fade">
   						<div class="numbertext">1 / 4</div>
   						<img src="images/slide1.png" style="width:100%">
    					<div class="text">99.8% Color Accuracy</div>
  					</div>
					<div class="mySlides fade">
   						<div class="numbertext">2 / 4</div>
   						<img src="images/slide2.png" style="width:100%">
    					<div class="text"></div>
  					</div>
					<div class="mySlides fade">
   						<div class="numbertext">3 / 4</div>
   						<img src="images/slide3.png" style="width:100%">
    					<div class="text"></div>
  					</div>
					<div class="mySlides fade">
   						<div class="numbertext">4 / 4</div>
   						<img src="images/slide4.png" style="width:100%">
    					<div class="text"></div>
  					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<script>
					var slideIndex = 1;
					showSlides(slideIndex);
					
					function plusSlides(n) {
						showSlides(slideIndex += n);
					}
					
					function currentSlide(n) {
						showSlides(slideIndex = n);
					}
					
					function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("dot");
						if (n > slides.length) {slideIndex = 1}    
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";  
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
					}
				</script>
  
			</td>
		</tr>
	
	</table>
<table id="footer" width="1000" align="center" padding="0">
	<tr><td height="400"></td></tr>
	<tr><td><a href="faq.html"><img src="images/faq.png" width="200" height="50"></a></td>
		<td><a href=""><img src="images/fb.png" width="200" height="50"></a></td>
		<td><a href=""><img src="images/twi.png" width="200" height="50"></a></td>
		<td><a href=""></a></td>
		<td><a href="toc.html"><img src="images/tnc.png" width="200" height="50"></a></td>
	</tr>
	</table>	
</body>
</html>
