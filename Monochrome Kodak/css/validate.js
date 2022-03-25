	function validateName()
		{
			var Name = document.getElementById("fname").value;
			if(Name == null)
				{
					alert("Please enter the full name");
					return false;
				}
			return true;
		}
		
		function validateEmail()
		{
			var email = document.getElementById("email").value;
			var at = email.indexof("@");
			var dt = email.lastIndexOf(".");
			var len = email.length;
			
			if((at<2)||(dt-at<2)||(len-dt<2))
				{
					alert("Please Enter a valid email address");
					return false;
				}
			return true;
		}
		
		function validatePhone()
		{
			var contact = document.getElementById("phone").value;
		
			if((isNAN(contact)) || (contact.length!=10))
				{
					alret("Please enter a valid telephone number");
					return false;
				}
			return true;
		}
		
		function validateZip()
		{
			var zip = document.getElementById("zip").value;
		
			if((isNAN(zip)) || (zip.length!=5))
				{
					alret("Please enter a valid telephone number");
					return false;
				}
			return true;
		}


		function validate()
		{
			if(validateName() && validateEmail() && validatePhone() && validateZip())
				{
					alert("Registration complete");
				}
			else 
				{
					alert("Error");
				}
		}
		
		