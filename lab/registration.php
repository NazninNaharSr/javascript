<!DOCTYPE html>
<html lang="en">
<head>


<script>
function validateForm() {
  var x = document.forms["form"]["name"].value;
  
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

var w= document.forms["form"]["email"].value;
  if (w=="") 
  {
  	alert("Email must be filled out");
    return false;
  }
  var z= document.forms["form"]["userName"].value;
  if (z=="") 
  {
  	alert("Username must be filled out");
    return false;
  }

 var y= document.forms["form"]["password"].value;
  if (y=="") 
  {
  	alert("Password must be filled out");
    return false;
  }

 var m= document.forms["form"]["cpassword"].value;
  if (m=="") 
  {
  	alert("Confirm Password must be filled out");
    return false;
  }


 var n= document.forms["form"]["gender"].value;
  if (n=="") 
  {
  	alert("Gender must be filled out");
    return false;
  }
var o= document.forms["form"]["dob"].value;
  if (o=="") 
  {
  	alert("Date of Birth must be filled out");
    return false;
  }
   document.getElementById("demo").innerHTML = text;
}
</script>

</script>

</head>
<body>

<div class="topnav">
  
  <a href="form.html">Login</a>
  <a href="registration.php">Registration</a>
</div>

<div class>
  <h4 style="text-align: center">Registration</h1>
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()" >
				<table align="center">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" placeholder="Give your name"/ id="name"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" placeholder="Give your email"/ id="email"></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><input type="text" name="userName" id="userName"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Give your password"/ id="password"></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="cpassword" placeholder="Retype your password" id="cpassword"></td>
					</tr>
						<tr>
							<td>Gender</td>
							<td>
								<input type="radio" name="gender" value="male" id="gender">Male
							
								<input type="radio" name="gender" value="female" id="gender">Female
							
								<input type="radio" name="gender" value="other" id="gender">Other
							</td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td><input type="text" name="dob" id="dob"></td>
							<td>(dd/mm/yyy)</td>
						</tr>

<tr>					

					<tr>
						<td></td>
						<td><input type="submit" name="register" value="Register"/ onclick="validateForm()">
		
						<input type="reset" value="Reset"></td>
					</tr>
				</table>
				<p id="demo"></p>
			</form>
</div>


</body>
</html>

